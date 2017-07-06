<?php

namespace Tests\Tasks;

use Tests\TestCase;
use App\Services\CarSharingService;
use App\Services\Contracts\CarSharing;

class Task2Test extends TestCase
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

    public function test_cars_response()
    {
        $cars = $this->carSharingService->getAllCars();
        $this->visit('/cars')->assertResponseOk()->seeJson($cars);
    }

    public function test_cars_random_response()
    {
        $cars = $this->carSharingService->getAllCars();
        $crawler = $this->visit('/cars/random')->assertResponseOk()->crawler();
        $car = [
            'model' => $crawler->filter('.cars-container > h2')->first()->text(),
            'image' => $crawler->filter('.cars-container > img')->first()->attr('src')
        ];
        $this->assertContains($car, $cars);
    }

}