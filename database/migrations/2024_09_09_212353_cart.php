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
        Schema::create('cart',function (Blueprint $table){
            $table->id();
            $table->string('user_id')->constrained('user');
            $table->integer('product_id')->constrained('products');
            $table->string('item_name');
            $table->integer('price');
            $table->integer('final_price');
            $table->tinyInteger('quantity')->default(1);
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
