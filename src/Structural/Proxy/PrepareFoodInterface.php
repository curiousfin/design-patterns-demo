<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Proxy;

interface PrepareFoodInterface
{
    public function prepare(...$ingredients): string;
}