<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Composite;

abstract class AbstractCompanyUnit
{
    public function __construct(
        private string $name,
        private string $position,
    ) {
    }

    abstract public function getSalary(): int;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}