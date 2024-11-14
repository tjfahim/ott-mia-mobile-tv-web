<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingMovieSeries extends Model
{
    protected $fillable = [
        'title',        // Movie or series title
        'image',        // URL or path to the image (nullable)
        'description',  // Description of the movie or series (nullable)
        'release_date', // Release date (nullable)
        'type',         // Type of media, e.g., 'movie', 'series'
        'status',       // Status: e.g., 'upcoming', 'released', etc.
    ];
    protected $casts = [
        'release_date' => 'datetime', // Ensure it's cast as a Carbon object
    ];
}
