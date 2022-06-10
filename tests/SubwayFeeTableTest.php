<?php

namespace Nagoya\Php20;

use Nagoya\Php20\Exception\LogicException;
use PHPUnit\Framework\TestCase;

class SubwayFeeTableTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(240, $this->getSUT()->resolveFee(2));
    }

    public function test_存在しない()
    {
        $this->expectException(LogicException::class);

        $this->getSUT()->resolveFee(10);
    }

    private function getSUT(): SubwayFeeTable
    {
        return new SubwayFeeTable([
            new SubwayFeeDefinition(distancePoints: 1, fee: 210),
            new SubwayFeeDefinition(distancePoints: 2, fee: 240),
        ]);
    }
}
