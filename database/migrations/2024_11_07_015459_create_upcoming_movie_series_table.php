<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingMovieSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_movie_series', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('title'); // Movie or series title
            $table->string('image')->nullable(); // URL or path to the image (nullable if no image provided)
            $table->text('description')->nullable(); // Description of the movie or series (nullable)
            $table->date('release_date')->nullable(); // Release date (nullable if not yet known)
            $table->string('type'); 
            $table->string('status')->default('upcoming'); // Status: e.g., 'upcoming', 'released', etc.
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
        Schema::dropIfExists('upcoming_movie_series');
    }
}
