<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieSeriesFavoritesTable extends Migration
{
    public function up()
    {
        Schema::create('movie_series_favorites', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure the engine is InnoDB
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('movie_videos_id')->nullable();
            $table->boolean('is_favorite')->default(false);
            $table->timestamps();

            // Adding foreign key constraints within the table creation
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('movie_videos_id')
                  ->references('id')
                  ->on('movie_videos')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('movie_series_favorites', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['movie_videos_id']);
        });

        Schema::dropIfExists('movie_series_favorites');
    }
}
