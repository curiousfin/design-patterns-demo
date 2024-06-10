<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

final class CustomerDTO
{
    public function __construct(
        private string $email,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
