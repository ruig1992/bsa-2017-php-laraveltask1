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
        $cars = $this->getAllCars();
        $randomGenerator = app(RandomGenerator::class);

        return $cars[
            $randomGenerator->getRandomInt(0, count($cars) - 1)
        ];
    }
}
