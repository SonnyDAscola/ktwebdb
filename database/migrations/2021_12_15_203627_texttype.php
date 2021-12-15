<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Texttype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texttypes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 80)->nullable(false);
            $table->text('description');
            $table->integer('order')->default(0);
        });

        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('texttype_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('content');
        });

        Schema::create('documentation_texts', function (Blueprint $table) {
            $table->foreignId('documentation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('text_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentation_texts');
        Schema::dropIfExists('texts');
        Schema::dropIfExists('texttypes');
    }
}
