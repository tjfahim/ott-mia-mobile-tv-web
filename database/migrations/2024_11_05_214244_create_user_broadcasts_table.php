<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBroadcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_broadcasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // Adding user_id column
            $table->string('title'); // Adding title column
            $table->text('description'); // Adding description column
            $table->string('image')->nullable(); // Adding image column (nullable in case not all broadcasts have an image)
            $table->string('status'); // Adding status column
            $table->string('key'); // Adding key column
            $table->string('rtmp_server'); // Adding rtmp_server column
            $table->string('rtmp_server_url'); // Adding rtmp_server column
            $table->string('live_link'); // Adding rtmp_server column
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
        Schema::dropIfExists('user_broadcasts');
    }
}
