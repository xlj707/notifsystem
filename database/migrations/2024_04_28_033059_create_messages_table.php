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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('from_user_id'); //id who send the message
            $table->unsignedBigInteger('to_user_id');   //id who recive the message
            $table->string('subject');
            $table->text('body');

            //Constraints
            $table->foreign('from_user_id')->references('id')->on('users'); 
            $table->foreign('to_user_id')->references('id')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
