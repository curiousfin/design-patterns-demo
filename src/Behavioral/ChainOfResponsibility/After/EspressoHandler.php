<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After;

final class EspressoHandler extends AbstractCoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if (1 === $coffeeType) {
            return 'Make espresso coffee';
        }

        return parent::makeCoffee($coffeeType);
    }
}
