<?php

namespace App\Services;

use App\Services\Contracts\RandomGenerator;

class RandomGeneratorService implements RandomGenerator
{
    public function getRandomInt($from, $to): int
    {
       return mt_rand($from, $to);
    }
}