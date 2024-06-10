<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Behavioral\ChainOfResponsibility\After;

abstract class AbstractCoffeeHandler
{
    protected ?AbstractCoffeeHandler $nextCoffeeHandler = null;
    
    public function setNextCoffeeHandler(AbstractCoffeeHandler $nextCoffeeHandler): AbstractCoffeeHandler
    {
        $this->nextCoffeeHandler = $nextCoffeeHandler;
        
        return $nextCoffeeHandler;
    }
    
    public function makeCoffee(int $coffeeType): string
    {
        if ($this->nextCoffeeHandler) {
            return $this->nextCoffeeHandler->makeCoffee($coffeeType);
        }
        
        return 'No coffee for you!';
    }
}