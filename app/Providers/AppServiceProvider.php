<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // app()->bind('App\Services\SocialService', function() {
        //     return new \App\Services\TwitterService('api-key-123');
        // });
        app()->bind('App\Services\SocialService', function() {
            return new \App\Services\FacebookService('thing1', 'thing2');
        });
    }
}
