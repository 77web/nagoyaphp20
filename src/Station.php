<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class Station
{
    public function __construct(
        private readonly string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
