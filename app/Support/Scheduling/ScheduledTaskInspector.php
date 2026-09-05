<?php

namespace App\Support\Scheduling;

use Illuminate\Console\Scheduling\CallbackEvent;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Str;

/**
 * Turns a scheduler {@see Event} into a stable key and a set of display fields.
 *
 * The key must be computed identically wherever it is used — the heartbeat
 * command that syncs the catalogue and the listener that records runs both rely
 * on it to line runs up with their task — so all of that logic lives here.
 */
class ScheduledTaskInspector
{
    /**
     * A stable identifier for a scheduled event.
     */
    public function keyFor(Event $event): string
    {
        $command = $this->commandName($event);

        if ($command) {
            return $command;
        }

        // Closure / callback tasks have no command; fall back to their
        // description, or a hash of the cron + summary as a last resort.
        $summary = $event->description ?: $this->rawSummary($event);
        $slug = Str::slug(Str::limit($summary, 60, ''));

        return 'closure:' . ($slug !== '' ? $slug : md5($event->expression . '|' . $summary));
    }

    /**
     * The artisan command name (e.g. "youtube:sync-channels"), or null for a
     * closure task or a raw shell command.
     */
    public function commandName(Event $event): ?string
    {
        if ($event instanceof CallbackEvent || ! $event->command) {
            return null;
        }

        // $event->command looks like:  '/usr/bin/php8.4' 'artisan' foo:bar --opt
        if (! preg_match('/artisan[\'"]?\s+(.+)$/s', $event->command, $matches)) {
            return null;
        }

        $invocation = trim($matches[1]);

        // First whitespace-delimited token is the command name.
        $name = Str::of($invocation)->before(' ')->trim("'\" ")->value();

        return $name !== '' ? $name : null;
    }

    /**
     * @return array<string, mixed>
     */
    public function describe(Event $event): array
    {
        $commandName = $this->commandName($event);

        return [
            'key' => $this->keyFor($event),
            'name' => $event->description ?: ($commandName ?: 'Closure'),
            'command_name' => $commandName,
            'command' => $event instanceof CallbackEvent ? null : $event->command,
            'expression' => $event->expression,
            'expression_label' => $this->expressionLabel($event->expression),
            'timezone' => $this->timezoneName($event),
            'description' => $event->description,
            'runnable' => $commandName !== null,
            'runs_in_background' => (bool) ($event->runInBackground ?? false),
            'without_overlapping' => (bool) ($event->withoutOverlapping ?? false),
        ];
    }

    /**
     * @return \Illuminate\Support\Collection<int, Event>
     */
    public function events(Schedule $schedule): \Illuminate\Support\Collection
    {
        return collect($schedule->events());
    }

    public function expressionLabel(string $expression): string
    {
        return match ($expression) {
            '* * * * *' => 'Every minute',
            '*/5 * * * *' => 'Every 5 minutes',
            '*/10 * * * *' => 'Every 10 minutes',
            '*/15 * * * *' => 'Every 15 minutes',
            '*/30 * * * *' => 'Every 30 minutes',
            '0 * * * *' => 'Hourly',
            '0 */6 * * *' => 'Every 6 hours',
            '0 0 * * *' => 'Daily (midnight)',
            '0 1 * * *' => 'Daily (01:00)',
            '0 0 * * 0' => 'Weekly (Sunday)',
            '0 0 1 * *' => 'Monthly',
            default => $expression,
        };
    }

    protected function timezoneName(Event $event): ?string
    {
        $tz = $event->timezone ?? null;

        if ($tz instanceof \DateTimeZone) {
            return $tz->getName();
        }

        return $tz !== null && $tz !== '' ? (string) $tz : null;
    }

    protected function rawSummary(Event $event): string
    {
        try {
            return $event->getSummaryForDisplay();
        } catch (\Throwable) {
            return $event->command ?? $event->expression;
        }
    }
}
