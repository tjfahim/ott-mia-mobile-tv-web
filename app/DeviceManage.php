<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceManage extends Model
{
    protected $fillable = [
        'user_id',
        'username',
        'device_id',
        'device_name',
        'device_type',
        'ip_address',
        'is_login',
    ];
}
