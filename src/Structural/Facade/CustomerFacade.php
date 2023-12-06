<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Facade;

final readonly class CustomerFacade
{
    public function __construct(
        private CustomerServiceInterface $customerService,
        private NotificationServiceInterface $notificationService,
    ) {
    }

    public function create(CustomerDTO $customerDTO): Customer
    {
        $customer = $this->customerService->create($customerDTO);
        $this->notificationService->send($customer);

        return $customer;
    }
}