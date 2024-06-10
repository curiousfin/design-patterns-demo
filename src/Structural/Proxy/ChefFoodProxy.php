<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Proxy;

final class ChefFoodProxy
{
    private array $preparedFood = [];

    public function __construct(private ChefFoodMaker $chefFoodMaker)
    {
    }

    public function prepare(...$ingredients): string
    {
        $foodKey = md5(implode('-', $ingredients));

        return $this->preparedFood[$foodKey]
            ?? ($this->preparedFood[$foodKey] = $this->chefFoodMaker->prepare(...$ingredients));
    }
}
