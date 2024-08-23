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
        Schema::create('auction_register',function(Blueprint $table){
            $table->id();
            $table->string('user_id');
            $table->string('auction_id');
            $table->string('payment_card');
            $table->string('address');
            $table->bigInteger('phone_number');
            $table->string('vat_number')->nullable();
            $table->string('company')->nullable();
            $table->tinyInteger('approved')->default(0);
            $table->string('approved_by')->nullable();
            $table->tinyInteger('email_sent')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
