<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

final class NotificationService implements NotificationServiceInterface
{
    public function send(Customer $customer): bool
    {
        // Send notification to customer
        return true;
    }
}
