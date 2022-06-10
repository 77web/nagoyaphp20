<?php
declare(strict_types=1);

namespace Nagoya\Php20;

use PHPUnit\Framework\TestCase;

class DistancePointCalculatorTest extends TestCase
{
    public function test()
    {
        $line = new Line([
            new Station('藤が丘', 0),
            new Station('本郷', 1),
            new Station('上社', 2),
            new Station('一社', 3),
        ]);

        $SUT = new DistancePointCalculator();
        $this->assertEquals(2, $SUT->calculate($line, '本郷', '一社'));
    }
}
