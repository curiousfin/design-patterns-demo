<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Composite;

final class Employee extends AbstractCompanyUnit
{
    public function __construct(string $name, string $position, private int $salary)
    {
        parent::__construct($name, $position);
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}