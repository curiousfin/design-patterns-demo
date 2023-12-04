<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Decorator;

interface ResolverInterface
{
    public function resolve($name): string;
}