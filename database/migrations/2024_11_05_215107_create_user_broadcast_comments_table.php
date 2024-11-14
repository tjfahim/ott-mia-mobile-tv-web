<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBroadcastCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_broadcast_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
    $table->unsignedBigInteger('user_broadcast_id'); // Adding user_broadcast_id to link to user_broadcasts table
    $table->unsignedBigInteger('user_id'); // Adding user_id to associate with the user who commented
    $table->text('description'); // Adding description for the comment
    $table->string('status'); // Adding status to indicate comment's state (e.g., "approved", "pending")
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
        Schema::dropIfExists('user_broadcast_comments');
    }
}
