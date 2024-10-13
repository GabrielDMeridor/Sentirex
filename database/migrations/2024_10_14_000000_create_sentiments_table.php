<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentimentsTable extends Migration
{
    public function up()
    {
        Schema::create('sentiments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key sa users
            $table->string('type'); // Example column for sentiment type (e.g., positive, negative)
            $table->text('comment')->nullable(); 
            $table->timestamps(); // Adds created_at and updated_at columns

            // If user_id is a foreign key, you can define it like this:
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sentiments');
    }
}
