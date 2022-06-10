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

    public function getStations(): array
    {
        return $this->stations;
    }
}
