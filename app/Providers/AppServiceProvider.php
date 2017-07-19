<?php
namespace App\Providers;

use App\Services\{
    CarSharingService,
    RandomGeneratorService,
    Contracts\CarSharing,
    Contracts\RandomGenerator
};
use App\Repositories\CarRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\Repository;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
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
