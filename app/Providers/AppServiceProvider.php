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
        // Registration of RandomGenerator
        $this->app->bind(RandomGenerator::class, RandomGeneratorService::class);
        // Registration of CarSharing
        $this->app->bind(CarSharing::class, CarSharingService::class);
        // Registration of Repository
        $this->app->bind(Repository::class, CarRepository::class);
    }
}
