<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\Before;

class CodeFormatter
{
    public function format(string $code, string $formatter): string
    {
        if ($formatter === 'psr') {
            return 'pretty formatted: ' . $code;
        }

        return 'ugly formatted: ' . $code;
    }
}