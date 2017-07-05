<?php

namespace App\Services\Contracts;

interface CarSharing
{
    public function getAllCars();
    public function getRandomCar();
}