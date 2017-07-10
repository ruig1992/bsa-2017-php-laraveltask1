<?php

namespace App\Services;

use App\Repositories\Contracts\Repository;

use App\Services\Contracts\CarSharing;
use App\Services\Contracts\RandomGenerator;

class CarSharingService implements CarSharing
{
    /**
     * Cars repository
     * @var Repository
     */
    protected $repository;

    /**
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all cars from repository
     * @return array
     */
    public function getAllCars()
    {
        return $this->repository->all();
    }

    /**
     * Get the random car from repository
     * @return array
     */
    public function getRandomCar()
    {
        $cars = $this->repository->all();

        return $cars[
            app(RandomGenerator::class)->getRandomInt(1, count($cars) - 1)
        ];
    }
}
