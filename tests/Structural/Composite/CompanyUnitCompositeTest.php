<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Structural\Composite;

use Curiousfin\DesignPatternsDemo\Structural\Composite\CompanyUnitComposite;
use Curiousfin\DesignPatternsDemo\Structural\Composite\Director;
use Curiousfin\DesignPatternsDemo\Structural\Composite\Employee;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class CompanyUnitCompositeTest extends TestCase
{
    private CompanyUnitComposite $companyUnitComposite;

    protected function setUp(): void
    {
        $this->companyUnitComposite = new CompanyUnitComposite('PUMA', 'Legal entity');
    }

    protected function tearDown(): void
    {
        unset($this->companyUnitComposite);
    }

    public function testGetSalary(): void
    {
        $this->companyUnitComposite->addEmployee(new Director('John', 'Director'));
        $this->companyUnitComposite->addEmployee(new Employee('Richard', 'CTO', 10000));
        $this->companyUnitComposite->addEmployee(new Employee('Alex', 'Product Manager', 4000));
        $this->companyUnitComposite->addEmployee(new Employee('Mike', 'Developer', 5000));

        self::assertSame(69000, $this->companyUnitComposite->getSalary());
    }
}
