<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After;

final class AmericanoHandler extends AbstractCoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if (2 === $coffeeType) {
            return 'Make americano coffee';
        }

        return parent::makeCoffee($coffeeType);
    }
}
