<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\SOLID\OpenClosed\Before;

use Curiousfin\DesignPatternsDemo\SOLID\OpenClosed\Before\CodeFormatter;
use PHPUnit\Framework\TestCase;

class CodeFormatterTest extends TestCase
{

    private CodeFormatter $codeFormatter;

    protected function setUp(): void
    {
        $this->codeFormatter = new CodeFormatter();
    }

    protected function tearDown(): void
    {
        unset($this->codeFormatter);
    }

    /**
     * @dataProvider formatDataProvider
     */
    public function testFormat(
        string $code,
        string $formatter,
        string $expectedCode
    ): void {
        $this->assertSame($expectedCode, $this->codeFormatter->format($code, $formatter));
    }

    public static function formatDataProvider(): iterable
    {
        yield [
            'code',
            'psr',
            'pretty formatted: code',
        ];

        yield [
            'code',
            'ugly',
            'ugly formatted: code',
        ];
    }
}
