<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\SingleResponsibility\After;

class User
{
    private function __construct(private string $email)
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}