<?php

namespace App\Services;

use App\Factories\MrtCost\MrtCostFactory;

class CalculationService
{
    public function calculateMrtCost($mrtPrice, $takeTimes): int
    {
        $totalCost = 0;
        foreach (range(1, $takeTimes) as $currentTime) {
            $mrtCost = MrtCostFactory::create($currentTime);
            $totalCost += $mrtCost->getCost($mrtPrice);
        }
        return $totalCost;
    }
}

