<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->text('payment_id');
            $table->string('slug');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email');
            $table->text('description');
            $table->string('phone');
            $table->decimal('amount_total');
            $table->string('status')->default("pending");
            $table->string('payment_type')->default('cash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
