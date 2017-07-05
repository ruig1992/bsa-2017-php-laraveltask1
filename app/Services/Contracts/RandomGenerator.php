<?php

namespace App\Services\Contracts;

interface RandomGenerator
{
    public function getRandomInt($from, $to): int;
}