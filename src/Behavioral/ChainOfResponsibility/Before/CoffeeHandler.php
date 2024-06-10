<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\Before;

final class CoffeeHandler
{
    public function makeCoffee(int $coffeeType): string
    {
        if (1 === $coffeeType) {
            return 'Make espresso coffee';
        }

        if (2 === $coffeeType) {
            return 'Make americano coffee';
        }

        return 'No coffee for you!';
    }
}
