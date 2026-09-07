<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('prayer_requests', function (Blueprint $table): void {
            // only_me | prayer_team | community. `is_private` is kept in sync
            // (true for only_me + prayer_team) so existing admin views and the
            // legacy API keep working unchanged.
            $table->string('visibility', 20)->default('prayer_team')->after('is_private');
        });

        DB::table('prayer_requests')
            ->where('is_private', false)
            ->update(['visibility' => 'community']);
    }

    public function down(): void
    {
        Schema::table('prayer_requests', function (Blueprint $table): void {
            $table->dropColumn('visibility');
        });
    }
};
