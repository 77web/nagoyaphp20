<?php

declare(strict_types=1);

namespace Nagoya\Php20;

use PHPUnit\Framework\TestCase;

class Php20Test extends TestCase
{
    /** @var Php20 */
    protected $php20;

    protected function setUp(): void
    {
        $this->php20 = new Php20();
    }

    public function testIsInstanceOfPhp20(): void
    {
        $actual = $this->php20;
        $this->assertInstanceOf(Php20::class, $actual);
    }
}
