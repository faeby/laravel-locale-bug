<?php

namespace App\Providers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
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
        // Function workaround.
//        $this->app->afterResolving(FormRequest::class, function ($request, $app) {
//            $app['request']->setDefaultLocale(App::getLocale());
//        });

        \Locale::setDefault(App::getLocale());
    }
}
