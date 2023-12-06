<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\SingleResponsobility\Before;

class User
{
    public function __construct(private string $email)
    {
    }

    public function save(): bool
    {
        // Save user to database
        return true;
    }
}