<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\SOLID\OpenClosed\After;

use Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After\CodeFormatter;
use Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After\CodeFormatterInterface;
use Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After\PSRFormatter;
use Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\After\UglyFormatter;
use PHPUnit\Framework\TestCase;

class CodeFormatterTest extends TestCase
{
    /**
     * @dataProvider formatDataProvider
     */
    public function testFormat(
        CodeFormatterInterface $codeFormatter,
        string $code,
        string $expectedCode
    ): void {
        $codeFormatter = new CodeFormatter($codeFormatter);
        $this->assertSame($expectedCode, $codeFormatter->format($code));
    }

    public static function formatDataProvider(): iterable
    {
        yield 'psr' => [
            new PSRFormatter(),
            "code",
            'pretty formatted: code',
        ];

        yield 'ugly' => [
            new UglyFormatter(),
            "code",
            'ugly formatted: code',
        ];
    }
}
