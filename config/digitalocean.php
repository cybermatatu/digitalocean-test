<?php

/*
 * This file is part of Laravel DigitalOcean.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'buzz',

    /*
    |--------------------------------------------------------------------------
    | DigitalOcean Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like. Both guzzle and buzz drivers are supported, with "guzzle"
    | being guzzle 3, and "guzzle5" being guzzle 5.
    |
    */

    'connections' => [

        'guzzle5' => [
            'driver'  => 'guzzle5',
            'token'   => env('DIGITALOCEAN_TOKEN'),
        ],

        'guzzle' => [
            'driver'  => 'guzzle',
            'token'   => env('DIGITALOCEAN_TOKEN'),
        ],

        'buzz' => [
            'driver'  => 'buzz',
            'token'   => env('DIGITALOCEAN_TOKEN'),
        ],

    ],

];
