<?php

declare(strict_types=1);

namespace Nagoya\Php20;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @param string $input
     * @param int $expect
     * @return void
     * @dataProvider provideTestData
     */
    public function test(string $input, int $expect): void
    {
        $app = new App();
        $this->assertEquals($expect, $app->run($input));
    }

    public function provideTestData(): array
    {
        return [
            ['A,1,B,2,C|A|B', 210],
            ['A,1,B,2,C|A|C', 270],
            ['W,1,X,1,Y,2,Z|W|X', 210],
            ['W,1,X,1,Y,2,Z|W|Y', 240],
            ['W,1,X,1,Y,2,Z|Z|X', 270],
        ];
    }
}
