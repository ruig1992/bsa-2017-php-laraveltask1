<?php

namespace Tests\Tasks;

use Tests\TestCase;
use App\Services\CarSharingService;
use App\Services\Contracts\CarSharing;

class Task1Test extends TestCase
{
    /**
     * CarsSharingService
     */
    private $carSharingService;

    public function setUp()
    {
        parent::setUp();

        $this->carSharingService = $this->app->make(CarSharing::class);
    }

    public function test_should_create_service()
    {
        $this->assertInstanceOf(CarSharingService::class, $this->carSharingService);
    }

    public function test_should_return_cars()
    {
        $cars = $this->carSharingService->getAllCars();
        $this->assertNotEmpty($cars);
        $this->assertEquals(count($cars), 5);
    }

    public function test_should_return_random_car()
    {
        $car = $this->carSharingService->getRandomCar();
        $this->assertNotEmpty($car);
        $this->assertArrayHasKey('model', $car);
        $this->assertArrayHasKey('image', $car);
    }
}