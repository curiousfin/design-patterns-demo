<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After;

final class UglyFormatter implements CodeFormatterInterface
{
    public function format(string $code): string
    {
        return 'ugly formatted: ' . $code;
    }
}
