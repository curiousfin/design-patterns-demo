<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

class CustomerService implements CustomerServiceInterface
{
    public function create(CustomerDTO $customerDTO): Customer
    {
        return new Customer($customerDTO->getEmail());
    }
}