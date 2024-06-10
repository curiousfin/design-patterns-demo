<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Decorator;

final class Resolver implements ResolverInterface
{
    public function resolve($name): string
    {
        return $name;
    }
}
