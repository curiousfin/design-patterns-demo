<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Adapter;

final class Converter implements ConverterInterface
{
    public function convert(string $json): array
    {
        return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    }
}