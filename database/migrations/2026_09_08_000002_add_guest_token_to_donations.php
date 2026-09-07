<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        // Production already added this column out-of-band for the web guest
        // donation flow; guard so this migration is a no-op there and only fills
        // the gap on environments that are behind.
        if (! Schema::hasColumn('donations', 'guest_token')) {
            Schema::table('donations', function (Blueprint $table): void {
                $table->string('guest_token', 64)->nullable()->after('donor_email');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('donations', 'guest_token')) {
            Schema::table('donations', function (Blueprint $table): void {
                $table->dropColumn('guest_token');
            });
        }
    }
};
