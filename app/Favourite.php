<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{


    protected $fillable = [
        'user_id',
        'item_id',
        'item_type',

    ];


    public function show()
    {
        return $this->belongsTo(Series::class, 'item_id', 'id');
    }


    public function movie()
    {
        return $this->belongsTo(Movies::class, 'item_id', 'id');
    }
}
