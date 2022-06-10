<?php

declare(strict_types=1);

namespace Nagoya\Php20;

class App
{
    public function __construct(
        private readonly LineBuilder $lineBuilder,
        private readonly DistancePointCalculator $distancePointsCalculator,
        private readonly SubwayFeeTable $feeTable,
    ) {
    }

    public function run(string $input): int
    {
        list($lineDefinition, $departureStationName, $arrivalStationName) = explode('|', $input);
        $line = $this->lineBuilder->build($lineDefinition);

        $distancePoints = $this->distancePointsCalculator->calculate($line, $departureStationName, $arrivalStationName);

        return $this->feeTable->resolveFee($distancePoints);
    }
}
