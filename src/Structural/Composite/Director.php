<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Composite;

final class Director extends AbstractCompanyUnit
{

    public function getSalary(): int
    {
        return 50000;
    }
}