<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $fillable = [
        'user_id',
        'display_language',
        'default_audio_language',
        'default_subtitle_language',
        'auto_play_next_episode',
        'auto_play_preview',
        'data_usage_per_screen',
        'notification_new_series_or_episode',
        'notification_new_recommendation_or_arrival',
        'notification_survey_and_research',
        'notification_membership_offer_and_promo',
        'notification_account_updates',
        'notification_email_1',
        'notification_email_2',
    ];

    // Define any relationships, if needed (example below):
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
