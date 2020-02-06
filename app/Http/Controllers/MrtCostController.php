<?php

namespace App\Http\Controllers;

use App\Services\CalculationService;

class MrtCostController extends Controller
{
    public function getMrtCost()
    {
        $times = \request('times');
        $mrtPrice = \request('mrt_price');
        $calculationService = new CalculationService();
        $totalCost = $calculationService->calculateMrtCost($mrtPrice, $times);
        $response = [
            "times"      => $times,
            "mrt_price"  => $mrtPrice,
            'total_cost' => $totalCost
        ];
        return response()->json($response);
    }
}
