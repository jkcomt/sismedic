<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // \Carbon\Carbon::setLocale('es');
        setLocale(LC_ALL,'es_ES');
        \Carbon\Carbon::setLocale(env('LOCALE', 'es'));

        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('es_PE');
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
