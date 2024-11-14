<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->integer('music_id')->autoIncrement();
            $table->string('music_title');
            $table->string('audio_type')->nullable()->default('Local');
            $table->string('music_url');
            $table->string('music_thumbnail_url')->nullable();
            $table->string('music_genre')->nullable();
            $table->string('music_artist')->nullable();
            $table->integer('music_release_date')->nullable();

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
        Schema::dropIfExists('music');
    }
}
