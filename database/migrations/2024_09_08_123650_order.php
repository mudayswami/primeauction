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
        //
        Schema::create('order',function(Blueprint $table){
            $table->id();
            $table->string('user_id');
            $table->foreignId('bid_id')->constrained('bids');
            $table->foreignId('lot_id')->constrained('tbl_lot');
            $table->foreignId('auction_id')->constrained('tbl_auction');
            $table->integer('final_amount');
            $table->integer('amount');
            $table->tinyInteger('paid')->default(0);
            $table->string('invoice')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('email_sent')->default(0);
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
