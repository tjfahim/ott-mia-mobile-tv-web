<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_manages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');       // Adding title column
            $table->string('image');       // Adding image column (this can be a URL or file path)
            $table->string('url');         // Adding URL column
            $table->boolean('status')->default(true);  // Adding status column as boolean, default is true (active)
            $table->timestamps();         // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_manages');
    }
}
