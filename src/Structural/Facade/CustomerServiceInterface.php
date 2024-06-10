<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

interface CustomerServiceInterface
{
    public function create(CustomerDTO $customerDTO): Customer;
}
