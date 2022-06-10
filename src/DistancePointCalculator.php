<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class DistancePointCalculator
{
    public function calculate(Line $targetLine, string $departureStationName, string $arrivalStationName): int
    {
        $departureStation = $targetLine->getStation($departureStationName);
        $arrivalStation = $targetLine->getStation($arrivalStationName);

        return abs($departureStation->getDistanceFromStartStation() - $arrivalStation->getDistanceFromStartStation());
    }
}
