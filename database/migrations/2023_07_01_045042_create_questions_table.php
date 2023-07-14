<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('name');
            $table->text('alternative1');
            $table->text('alternative2');
            $table->text('alternative3');
            $table->text('alternative4');
            $table->text('alternative5');
            $table->enum('state', ['ACTIVE', 'DELETE'])->default('ACTIVE');

            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('questions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
