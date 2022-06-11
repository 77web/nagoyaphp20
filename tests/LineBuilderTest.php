<?php
declare(strict_types=1);

namespace Nagoya\Php20;

use PHPUnit\Framework\TestCase;

class LineBuilderTest extends TestCase
{
    public function test()
    {
        $SUT = new LineBuilder();
        $line = $SUT->build('A,1,B,2,C');

        $stationA = $line->getStation('A');
        $this->assertEquals(0, $stationA->getDistanceFromStartStation());

        $stationB = $line->getStation('B');
        $this->assertEquals(1, $stationB->getDistanceFromStartStation());

        $stationC = $line->getStation('C');
        $this->assertEquals(3, $stationC->getDistanceFromStartStation());
    }
}
