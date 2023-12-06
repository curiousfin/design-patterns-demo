<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Composite;

class CompanyUnitComposite extends AbstractCompanyUnit
{
    private array $employees = [];

    public function addEmployee(AbstractCompanyUnit $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getSalary(): int
    {
        $salary = 0;
        foreach ($this->employees as $employee) {
            $salary += $employee->getSalary();
        }

        return $salary;
    }
}