<?php
declare(strict_types=1);

namespace Nagoya\Php20;

class SubwayFeeTable
{
    /**
     * @param array<SubwayFeeDefinition> $definitions
     */
    public function __construct(
        private readonly array $definitions,
    ) {
    }

    public function resolveFee(int $distancePoints): int
    {
        foreach ($this->definitions as $def) {
            if ($def->supports($distancePoints)) {
                return $def->getFee();
            }
        }

        throw new Exception\LogicException(sprintf('No Fee defined for distancePoints: %d', $distancePoints));
    }
}
