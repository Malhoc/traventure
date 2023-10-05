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
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('street_address')->nullable();
            $table->string('town_or_city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('status')->nullable();
            $table->string('term_condition_agree')->nullable();
            $table->integer('amount');
            $table->string('error_message')->nullable();
            $table->string('cc_last_digits')->nullable();
            $table->string('payment_provider_customer_no')->nullable();
            $table->string('payment_provider_transaction_id')->nullable();
            $table->foreignId('booking_id')->nullable();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
