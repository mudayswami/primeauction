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
        Schema::create('bid',function (Blueprint $table){
            $table->id();
            $table->string('user_id');
            $table->string('auction_id');
            $table->string('lot_id');
            $table->bigInteger('bid');
            $table->tinyInteger('approved');
            $table->tinyInteger('won')->default(0);
            $table->tinyInteger('email_sent')->default(0);
            $table->tinyInteger('status')->default(1);
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
