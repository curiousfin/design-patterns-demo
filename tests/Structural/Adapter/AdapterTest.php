<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Structural\Adapter;

use Curiousfin\DesignPatternsDemo\Structural\Adapter\Adapter;
use Curiousfin\DesignPatternsDemo\Structural\Adapter\Converter;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AdapterTest extends TestCase
{
    private Adapter $adapter;

    protected function setUp(): void
    {
        $converter = new Converter();
        $this->adapter = new Adapter($converter);
    }

    protected function tearDown(): void
    {
        unset($this->adapter);
    }

    public function testConvert(): void
    {
        $json = '{"name":"John","surname":"Doe","age":30,"city":"New York"}';
        $expectedData = [
            'city' => 'New York',
            'age' => 30,
            'surname' => 'Doe',
            'name' => 'John',
        ];

        $adaptedData = $this->adapter->convert($json);

        self::assertSame($expectedData, $adaptedData);
    }
}
