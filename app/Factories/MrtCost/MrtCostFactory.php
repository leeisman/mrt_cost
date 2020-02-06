<?php

namespace App\Factories\MrtCost;

class MrtCostFactory
{
    private static $singleInstance = [];

    public static function create(int $currentTime): MrtCostInterface
    {
        $key = self::searchInstanceKey($currentTime);
        if (!isset(self::$searchInstance[$key])) {
            self::$singleInstance[$key] = self::createInstance($key);
        }
        return self::$singleInstance[$key];
    }

    private static function searchInstanceKey(int $currentTime)
    {
        if ($currentTime <= 10) {
            return 0;
        }
        if ($currentTime >= 11 && $currentTime <= 20) {
            return 11;
        }
        if ($currentTime >= 21 && $currentTime <= 30) {
            return 21;
        }
        if ($currentTime >= 21 && $currentTime <= 30) {
            return 21;
        }
        if ($currentTime >= 31 && $currentTime <= 40) {
            return 31;
        }
        if ($currentTime >= 41 && $currentTime <= 50) {
            return 41;
        }
        if ($currentTime >= 51) {
            return 51;
        }
    }

    private static function createInstance(int $key): MrtCostInterface
    {
        switch ($key) {
            case 11:
                return new Eleven2Twenty();
            case 21:
                return new TwentyOne2Thirty();
            case 31:
                return new ThirtyOne2Forty();
            case 41:
                return new FortyOne2Fifty();
            case 51:
                return new FiftyOneAbove();
            case 0:
                return new DefaultCost();
            default:
                return new DefaultCost();
        }
    }
}