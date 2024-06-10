<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\Before;

class CoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if ($coffeeType === 1) {
            return 'Make espresso coffee';
        }

        if ($coffeeType === 2) {
            return 'Make americano coffee';
        }

        return 'No coffee for you!';
    }
}