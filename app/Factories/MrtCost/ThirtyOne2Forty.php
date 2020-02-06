<?php

namespace App\Factories\MrtCost;

class ThirtyOne2Forty implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice * 0.8;
    }
}