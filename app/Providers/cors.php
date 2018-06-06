<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class cors extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to   array('*') to accept any value.
    |
    */

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'Authorization'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE'], // ex: ['GET', 'POST', 'PUT',  'DELETE']
    'exposedHeaders' => [''],
    'maxAge' => 0,
];

        //
    }
}
