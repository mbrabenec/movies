<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('movie_type_id');
            $table->unsignedBigInteger('movie_status_id');
            $table->unsignedBigInteger('certification_id');
            $table->unsignedBigInteger('budget');
            $table->string('name');
            $table->string('color_code');
            $table->string('budget_currency');
            $table->integer('length');
            $table->integer('votes_nr');
            $table->integer('metascore');
            $table->integer('year');
            $table->integer('start_year');
            $table->integer('end_year');
            $table->float('rating');

        });
    }

    // INSERT INTO `movies` (`id`, `movie_type_id`, `movie_status_id`, `name`, `length`, `year`, `start_year`, `end_year`, `rating`, `votes_nr`, `metascore`, `certification_id`, `budget`, `budget_currency`, `color_code`)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
