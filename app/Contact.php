<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts_form';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message',
        'phone'
    ];
}
