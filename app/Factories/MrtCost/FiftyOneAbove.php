<?php

namespace App\Factories\MrtCost;

class FiftyOneAbove implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice * 0.7;
    }
}