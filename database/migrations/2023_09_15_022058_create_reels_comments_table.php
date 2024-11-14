<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReelsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reels_comments', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('reel_id');
            $table->integer('user_id');
            $table->string('comment');
            $table->integer('parent_id')->default('0');

            $table->string('status')->default('1');
            
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
        Schema::dropIfExists('reels_comments');
    }
}
