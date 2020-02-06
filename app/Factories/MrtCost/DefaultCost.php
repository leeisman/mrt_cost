<?php

namespace App\Factories\MrtCost;

class DefaultCost implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice;
    }
}