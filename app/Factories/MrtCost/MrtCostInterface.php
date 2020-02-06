<?php

namespace App\Factories\MrtCost;

interface MrtCostInterface
{
    public function getCost(int $mrtPrice): int;
}