<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Behavioral\ChainOfResponsibility\After;

use Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After\AmericanoHandler;
use Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After\EspressoHandler;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AbstractCoffeeHandlerTest extends TestCase
{
    /**
     * @dataProvider provideMakeCoffeeCases
     */
    public function testMakeCoffee(int $coffeeType, string $expectedCoffee)
    {
        $espressoHandler = new EspressoHandler();
        $americanoHandler = new AmericanoHandler();
        $espressoHandler->setNextCoffeeHandler($americanoHandler);

        self::assertSame($expectedCoffee, $espressoHandler->makeCoffee($coffeeType));
    }

    public static function provideMakeCoffeeCases(): iterable
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
