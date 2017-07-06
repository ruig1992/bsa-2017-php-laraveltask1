<?php

namespace App\Services;

use App\Services\Contracts\RandomGenerator;

class RandomGeneratorService implements RandomGenerator
{
    public function getRandomInt(int $from, int $to): int
    {
       return mt_rand($from, $to);
    }
}