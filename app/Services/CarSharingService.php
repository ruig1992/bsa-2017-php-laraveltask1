<?php

namespace App\Services;

use App\Services\Contracts\CarSharing;
use App\Services\Contracts\RandomGenerator;

class CarSharingService implements CarSharing
{
    /**
     * Get all cars from CarRepository
     * @return array
     */
    public function getAllCars()
    {
        return app('CarRepository')->all();
    }

    /**
     * Get random car from CarRepository
     * @return array
     */
    public function getRandomCar()
    {
        $cars = app('CarRepository')->all();

        return $cars[
            app(RandomGenerator::class)->getRandomInt(1, count($cars))
        ];
    }
}
