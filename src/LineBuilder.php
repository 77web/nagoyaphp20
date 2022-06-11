<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class LineBuilder
{
    public function build(string $lineDefinition): Line
    {
        $parts = explode(',', $lineDefinition);
        $stations = [
            new Station($parts[array_key_first($parts)], 0)
        ];
        $distanceFromStart = 0;
        for ($i = 1; $i < count($parts); $i = $i + 2) {
            $distance = (int) $parts[$i];
            $distanceFromStart += $distance;
            $stationName = $parts[$i + 1];
            $stations[] = new Station($stationName, $distanceFromStart);
        }

        return new Line($stations);
    }
}
