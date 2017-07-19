<?php
namespace App\Services;

use App\Services\Contracts\CarSharing;
use App\Repositories\Contracts\Repository;
use App\Services\Contracts\RandomGenerator;

/**
 * Class CarSharingService
 * @package App\Services
 */
class CarSharingService implements CarSharing
{
    /**
     * Cars repository
     * @var Repository
     */
    protected $repository;
    /**
     * Random generator
     * @var RandomGenerator
     */
    protected $generator;

    /**
     * @param Repository $repository
     */
    public function __construct(Repository $repository, RandomGenerator $generator)
    {
        $this->repository = $repository;
        $this->generator = $generator;
    }

    /**
     * Get all cars from repository
     * @return array
     */
    public function getAllCars(): array
    {
        return $this->repository->all();
    }

    /**
     * Get the random car from repository
     * @return array
     */
    public function getRandomCar(): array
    {
        $cars = $this->getAllCars();

        return $cars[
            $this->generator->getRandomInt(0, count($cars) - 1)
        ];
    }
}
