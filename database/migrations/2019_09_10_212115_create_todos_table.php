<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('description');
            $table->enum('medium', ['email', 'usmeno', 'spec', 'slack']);

            $table->integer('duration');
            $table->integer('priority');

            $table->dateTime('date_planed');
            $table->dateTime('date_deadline');
            $table->dateTime('completed');

            $table->integer('contact');
            $table->integer('worker');

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
        Schema::dropIfExists('todos');
    }
}
