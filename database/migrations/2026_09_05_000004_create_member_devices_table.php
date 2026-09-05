<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('member_devices', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('member_id')->index();
            $table->string('token', 512);                 // FCM / APNs registration token
            $table->string('platform', 20)->nullable();   // ios | android
            $table->string('app_version', 40)->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();

            $table->unique(['member_id', 'token'], 'member_devices_member_token_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('member_devices');
    }
};
