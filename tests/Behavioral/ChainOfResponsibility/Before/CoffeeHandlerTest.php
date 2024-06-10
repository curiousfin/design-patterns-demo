<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Behavioral\ChainOfResponsibility\Before;

use Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\Before\CoffeeHandler;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class CoffeeHandlerTest extends TestCase
{
    private CoffeeHandler $coffeeHandler;

    protected function setUp(): void
    {
        $this->coffeeHandler = new CoffeeHandler();
    }

    protected function tearDown(): void
    {
        unset($this->coffeeHandler);
    }

    #[DataProvider('makeCoffeeDataProvider')]
    public function testMakeCoffee(int $coffeeType, string $expectedCoffee): void
    {
        self::assertSame($expectedCoffee, $this->coffeeHandler->makeCoffee($coffeeType));
    }

    public static function makeCoffeeDataProvider(): iterable
    {
        yield 'espresso' => [
            1,
            'Make espresso coffee',
        ];

        yield 'americano' => [
            2,
            'Make americano coffee',
        ];

        yield 'no coffee' => [
            3,
            'No coffee for you!',
        ];
    }
}
