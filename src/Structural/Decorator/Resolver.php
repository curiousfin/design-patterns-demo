<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Decorator;


class Resolver implements ResolverInterface
{
    public function resolve($name): string
    {
        return $name;
    }
}