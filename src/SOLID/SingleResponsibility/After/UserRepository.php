<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\SOLID\SingleResponsibility\After;

class UserRepository
{
    public function save(User $user): bool
    {
        // Save user to database
        return true;
    }
}