<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\CarRepository;
use App\Repositories\Contracts\Repository;
use App\Services\{
    CarSharingService,
    RandomGeneratorService,
    Contracts\CarSharing,
    Contracts\RandomGenerator
};

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
        // Registration of CarSharing in AppServiceProvider
        $this->app->bind(CarSharing::class, CarSharingService::class);
        // Registration of CarRepository in AppServiceProvider
        $this->app->bind(Repository::class, CarRepository::class);
    }
}
