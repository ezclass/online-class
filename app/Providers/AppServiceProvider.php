<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(UrlGenerator $urlGenerator)
    {
        if (env('FORCE_HTTPS')) {
            URL::forceScheme('https', $urlGenerator);
        }
    }
}
