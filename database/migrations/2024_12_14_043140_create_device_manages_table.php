<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_manages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // Foreign key to users table (if applicable)
            $table->string('username'); 
            $table->string('device_id'); // Unique identifier for the device
            $table->string('ip_address')->nullable(); // IP address of the device
            $table->string('device_name'); // Name of the device
            $table->boolean('is_login')->default(false); // Indicates whether the device is logged in
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
        Schema::dropIfExists('device_manages');
    }
}
