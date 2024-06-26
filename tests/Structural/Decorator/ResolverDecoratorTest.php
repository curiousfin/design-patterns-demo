<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Structural\Decorator;

use Curiousfin\DesignPatternsDemo\Structural\Decorator\Resolver;
use Curiousfin\DesignPatternsDemo\Structural\Decorator\ResolverDecorator;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class ResolverDecoratorTest extends TestCase
{
    public function testResolve(): void
    {
        $resolverDecorator = new ResolverDecorator(new Resolver());
        self::assertSame('Resolved by decorator test', $resolverDecorator->resolve('test'));
    }
}
