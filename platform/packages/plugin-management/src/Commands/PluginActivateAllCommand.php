<?php

namespace Botble\PluginManagement\Commands;

use Botble\Base\Facades\BaseHelper;
use Botble\PluginManagement\Services\PluginService;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('cms:plugin:activate:all', 'Activate all plugins in /plugins directory')]
class PluginActivateAllCommand extends Command
{
    public function handle(PluginService $pluginService): int
    {
        $plugins = array_values(BaseHelper::scanFolder(plugin_path()));
        $dependencies = [];

        foreach ($plugins as $plugin) {
            $dependencies[$plugin] = array_map(
                fn ($require) => Arr::last(explode('/', $require)),
                $pluginService->getPluginInfo($plugin)['require'] ?? []
            );
        }

        $sorted = [];
        $visited = [];
        $visit = function (string $plugin) use (&$visit, &$sorted, &$visited, $dependencies, $plugins): void {
            if (isset($visited[$plugin])) {
                return;
            }

            $visited[$plugin] = true;

            foreach ($dependencies[$plugin] ?? [] as $dependency) {
                if (in_array($dependency, $plugins, true)) {
                    $visit($dependency);
                }
            }

            $sorted[] = $plugin;
        };

        foreach ($plugins as $plugin) {
            $visit($plugin);
        }

        foreach ($sorted as $plugin) {
            $result = $pluginService->activate($plugin);

            if ($result['error'] ?? false) {
                $this->components->error($result['message'] ?? "Failed to activate {$plugin}");
            }
        }

        $this->components->info('Activated successfully!');

        return self::SUCCESS;
    }
}
