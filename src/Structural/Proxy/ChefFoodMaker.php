<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Proxy;

class ChefFoodMaker implements PrepareFoodInterface
{
    public function prepare(...$ingredients): string
    {
        return implode('+', $ingredients);
    }
}