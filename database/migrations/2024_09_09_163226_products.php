<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        // Schema::create('products',function(Blueprint $table){
        //     $table->id();
        //     $table->string('title');
        //     $table->text('description');
        //     $table->string('brand')->nullable();
        //     $table->string('options')->nullable();
        //     $table->string('department');
        //     $table->decimal('original_price');
        //     $table->decimal('discount_price');
        //     $table->decimal('discount_percentage');
        //     $table->integer('stock');
        //     $table->string('img');
        //     $table->tinyText('condition');
        //     $table->tinyInteger('status')->default(1);
        //     $table->tinyInteger('featured')->default(0);
        //     $table->integer('author');
        //     $table->timestamps();

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
