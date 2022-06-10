<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class SubwayFeeDefinition
{
    public function __construct(
        private int $distancePoints,
        private int $fee,
    ) {
    }

    public function supports(int $distancePoints): bool
    {
        return $distancePoints === $this->distancePoints;
    }

    public function getFee(): int
    {
        return $this->fee;
    }
}
