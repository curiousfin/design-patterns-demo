<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\Before;

final class CodeFormatter
{
    public function format(string $code, string $formatter): string
    {
        if ('psr' === $formatter) {
            return 'pretty formatted: ' . $code;
        }

        return 'ugly formatted: ' . $code;
    }
}
