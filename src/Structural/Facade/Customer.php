<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

class Customer
{
    public function __construct(
        private string $email,
    ) {
    }
}