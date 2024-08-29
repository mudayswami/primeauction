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
        Schema::create('bids',function(Blueprint $table){
            $table->id();
            $table->string('user_id')->constrained('user');
            $table->foreignId('lot')->constrained('tbl_lot');
            $table->decimal('bid_amount');
            $table->decimal('max_bid_amount');
            $table->tinyInteger('reserve_met');
            $table->enum('status',['active','withdrawn','outbid','won'])->default('active');
            $table->tinyInteger('paid')->default(0);
            $table->integer('transaction')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
