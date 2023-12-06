<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Adapter;

final readonly class Adapter implements ConverterInterface
{

    public function __construct(private Converter $converter)
    {
    }


    public function convert(string $json): array
    {
        return array_reverse($this->converter->convert($json));
    }
}