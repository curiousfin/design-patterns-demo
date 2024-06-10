<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\SingleResponsibility\After;

final class User
{
    private function __construct(private string $email)
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
