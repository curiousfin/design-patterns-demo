<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After;

class AmericanoHandler extends AbstractCoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if ($coffeeType === 2) {
            return 'Make americano coffee';
        }

        return parent::makeCoffee($coffeeType);
    }
}