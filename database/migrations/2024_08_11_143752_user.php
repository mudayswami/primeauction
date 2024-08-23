<?php

use GuzzleHttp\Psr7\DroppingStream;
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
        Schema::create('user',function(Blueprint $table){
            $table->id();
            $table->string('user_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('address')->nullable();
            $table->integer('verified')->default(0);
            $table->string('town');
            $table->string('post_code');
            $table->string('country');
            $table->bigInteger('phone_number');
            $table->string('phone_country');
            $table->integer('seller')->default(0);
            $table->tinyInteger('seller_approved')->default(0);
            $table->string('photo_id')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('entity');
            $table->string('company')->nullable();
            $table->string('vat_number')->nullable();
            $table->integer('subscribe')->nullable()->default(0);
            $table->string('interested_category')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('user');
    }
};
