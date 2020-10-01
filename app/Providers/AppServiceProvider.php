<?php

namespace App\Providers;

use App\Observers\JobObserver; // Cette ligne a été ajoutée afin d'aider à la redirection back-end pour la publication du site avec Netlify
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Ce if a été ajoutée afin d'aider à la redirection back-end pour la publication du site avec Netlify
        if($this->app->environment() == 'production') {
            \URL::forceScheme('https');
            \URL::forceRootUrl(\Config::get('app.url'));
        }
        //
    }
}
