<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Adapter;

use JsonException;

interface ConverterInterface
{
    /** @throws JsonException */
    public function convert(string $json): array;
}
