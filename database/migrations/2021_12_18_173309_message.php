<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('receiver_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('sender_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('date_send')->nullable(true);
            $table->timestamp('date_read')->nullable(true);
            $table->boolean('star_by_receiver')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
