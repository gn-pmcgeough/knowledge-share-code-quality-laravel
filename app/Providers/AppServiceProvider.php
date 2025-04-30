<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * Clear caches
     * php artisan config:clear
     * php artisan cache:clear
     * php artisan config:cache
     */
    public function boot(): void
    {
//        Model::shouldBeStrict(!app()->isProduction());



















//        Model::automaticallyEagerLoadRelationships();
    }
}
