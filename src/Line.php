<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class Line
{
    /**
     * @param array<Station> $stations
     */
    public function __construct(
        private readonly array $stations,
    ) {
    }

    public function getStation(string $name): Station
    {
        foreach ($this->stations as $station) {
            if ($station->getName() === $name) {
                return $station;
            }
        }

        throw new Exception\LogicException(sprintf('No station found for name "%s"', $name));
    }
}
