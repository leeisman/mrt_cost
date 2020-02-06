<?php

namespace App\Factories\MrtCost;

class TwentyOne2Thirty implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice * 0.85;
    }
}