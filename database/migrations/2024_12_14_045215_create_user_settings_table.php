<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('display_language')->nullable(); // Preferred display language
            $table->string('default_audio_language')->nullable(); // Default audio language
            $table->string('default_subtitle_language')->nullable(); // Default subtitle language
            $table->boolean('auto_play_next_episode')->default(true); // Auto-play next episode
            $table->boolean('auto_play_preview')->default(true); // Auto-play previews
            $table->string('data_usage_per_screen')->default('auto'); // Data usage per screen (e.g., auto, low, medium, high)
            $table->boolean('notification_new_series_or_episode')->default(true); // Notifications for new series or episodes
            $table->boolean('notification_new_recommendation_or_arrival')->default(true); // Notifications for new recommendations or arrivals
            $table->boolean('notification_survey_and_research')->default(true); // Notifications for surveys and research
            $table->boolean('notification_membership_offer_and_promo')->default(true); // Notifications for membership offers and promos
            $table->boolean('notification_account_updates')->default(true); // Notifications for account updates
            $table->string('notification_email_1')->nullable(); // Email notifications (type 1)
            $table->string('notification_email_2')->nullable(); // Email notifications (type 2)
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
        Schema::dropIfExists('user_settings');
    }
}
