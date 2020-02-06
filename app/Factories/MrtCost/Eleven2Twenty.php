<?php

namespace App\Factories\MrtCost;

class Eleven2Twenty implements MrtCostInterface
{
    public function getCost(int $mrtPrice): int
    {
        return $mrtPrice * 0.9;
    }
}