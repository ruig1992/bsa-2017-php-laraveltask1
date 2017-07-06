<?php

namespace App\Services\Contracts;

interface RandomGenerator
{
    public function getRandomInt(int $from, int $to): int;
}