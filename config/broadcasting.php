<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "pusher", "redis", "log", "null"
    |
    */

    'default' => 'pusher',

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */
'connections' => [
    'pusher' => [
        'driver' => 'pusher',
        'key' => '37481fe3e7383bc1f6d6', // Your Pusher App Key
        'secret' => 'ba42c321cbd825711748', // Your Pusher App Secret
        'app_id' => '1893286', // Your Pusher App ID
        'options' => [
            'cluster' => 'ap2', // Pusher App Cluster
            'useTLS' => true, // Use TLS for secure communication
        ],
    ],



        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
