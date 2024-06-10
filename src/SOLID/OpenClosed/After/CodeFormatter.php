<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After;

final class CodeFormatter implements CodeFormatterInterface
{
    public function __construct(private CodeFormatterInterface $codeFormatter)
    {
    }

    public function format(string $code): string
    {
        return $this->codeFormatter->format($code);
    }
}
