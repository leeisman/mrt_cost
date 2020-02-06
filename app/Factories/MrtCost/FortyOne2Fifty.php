<?php

namespace App\Factories\MrtCost;

class FortyOne2Fifty implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice * 0.75;
    }
}