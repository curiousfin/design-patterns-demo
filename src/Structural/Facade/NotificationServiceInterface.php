<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

interface NotificationServiceInterface
{
    public function send(Customer $customer): bool;
}
