<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\RandomGeneratorService;
use App\Services\Contracts\RandomGenerator;

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
        // Registration of RandomGenerator in AppServiceProvider
        $this->app->bind(RandomGenerator::class, RandomGeneratorService::class);
    }
}
