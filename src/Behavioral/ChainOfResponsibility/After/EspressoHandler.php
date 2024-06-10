<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After;

class EspressoHandler extends AbstractCoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if ($coffeeType === 1) {
            return 'Make espresso coffee';
        }

        return parent::makeCoffee($coffeeType);
    }
}