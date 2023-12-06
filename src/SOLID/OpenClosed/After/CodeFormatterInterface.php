<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After;

interface CodeFormatterInterface
{
    public function format(string $code): string;
}