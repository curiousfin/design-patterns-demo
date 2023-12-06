<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After;

class PSRFormatter implements CodeFormatterInterface
{
    public function format(string $code): string
    {
        return 'pretty formatted: ' . $code;
    }
}