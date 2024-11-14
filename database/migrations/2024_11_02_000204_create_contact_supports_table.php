<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id'); // Adding the name field
            $table->string('name'); // Adding the name field
            $table->string('email'); // Adding the email field
            $table->text('description'); // Adding the description field
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
        Schema::dropIfExists('contact_supports');
    }
}
