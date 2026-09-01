<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('donations')) {
            Schema::create('donations', function (Blueprint $table): void {
                $table->id();
                $table->unsignedBigInteger('member_id')->nullable()->index();
                $table->decimal('amount', 10, 2);
                $table->char('currency', 3)->default('USD');
                $table->enum('status', ['pending', 'completed', 'cancelled', 'failed'])->default('pending');
                $table->string('paypal_order_id')->nullable()->index();
                $table->string('paypal_capture_id')->nullable();
                $table->string('paypal_payer_id')->nullable();
                $table->string('donor_name');
                $table->string('donor_email');
                $table->text('message')->nullable();
                $table->timestamps();
            });
        }

        if (Schema::hasTable('members')) {
            $foreignKeyExists = collect(Schema::getForeignKeys('donations'))
                ->contains(fn (array $foreignKey): bool => in_array('member_id', $foreignKey['columns'], true));

            if (! $foreignKeyExists) {
                Schema::table('donations', function (Blueprint $table): void {
                    $table->foreign('member_id')->references('id')->on('members')->nullOnDelete();
                });
            }
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
