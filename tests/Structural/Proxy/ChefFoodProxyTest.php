<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Structural\Proxy;

use Curiousfin\DesignPatternsDemo\Structural\Proxy\ChefFoodMaker;
use Curiousfin\DesignPatternsDemo\Structural\Proxy\ChefFoodProxy;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ChefFoodProxyTest extends TestCase
{
    private ChefFoodProxy $chefFoodProxy;
    private ChefFoodMaker|MockObject $chefFoodMakerMock;

    protected function setUp(): void
    {
        $this->chefFoodMakerMock = $this->createMock(ChefFoodMaker::class);
        $this->chefFoodProxy = new ChefFoodProxy($this->chefFoodMakerMock);
    }

    protected function tearDown(): void
    {
        unset(
            $this->chefFoodMakerMock,
            $this->chefFoodProxy,
        );
    }

    public function testPrepare(): void
    {
        $expectedFood = 'tomato+cheese+ham+mushrooms';
        $ingredients = ['tomato', 'cheese', 'ham', 'mushrooms'];

        $this->chefFoodMakerMock
            ->expects($this->once())
            ->method('prepare')
            ->with(...$ingredients)
            ->willReturn($expectedFood);

        $this->assertSame(
            $expectedFood,
            $this->chefFoodProxy->prepare(...$ingredients)
        );

        $this->assertSame(
            $expectedFood,
            $this->chefFoodProxy->prepare(...$ingredients)
        );
    }
}
