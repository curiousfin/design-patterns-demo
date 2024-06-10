<?php

declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Tests\Structural\Facade;

use Curiousfin\DesignPatternsDemo\Structural\Facade\Customer;
use Curiousfin\DesignPatternsDemo\Structural\Facade\CustomerDTO;
use Curiousfin\DesignPatternsDemo\Structural\Facade\CustomerFacade;
use Curiousfin\DesignPatternsDemo\Structural\Facade\CustomerService;
use Curiousfin\DesignPatternsDemo\Structural\Facade\CustomerServiceInterface;
use Curiousfin\DesignPatternsDemo\Structural\Facade\NotificationService;
use Curiousfin\DesignPatternsDemo\Structural\Facade\NotificationServiceInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class CustomerFacadeTest extends TestCase
{
    private CustomerFacade $customerFacade;
    private CustomerService|MockObject $customerServiceMock;
    private MockObject|NotificationService $notificationServiceMock;

    protected function setUp(): void
    {
        $this->customerServiceMock = $this->createMock(CustomerServiceInterface::class);
        $this->notificationServiceMock = $this->createMock(NotificationServiceInterface::class);

        $this->customerFacade = new CustomerFacade(
            $this->customerServiceMock,
            $this->notificationServiceMock,
        );
    }

    protected function tearDown(): void
    {
        unset($this->customerFacade);
    }

    public function testCreate(): void
    {
        $customerEmail = 'test@gmail.com';
        $customerDTO = new CustomerDTO($customerEmail);
        $expectedCustomer = new Customer($customerEmail);

        $this->customerServiceMock
            ->expects(self::once())
            ->method('create')
            ->with($customerDTO)
            ->willReturn($expectedCustomer);

        $this->notificationServiceMock
            ->expects(self::once())
            ->method('send')
            ->with($expectedCustomer)
            ->willReturn(true);

        $customer = $this->customerFacade->create($customerDTO);

        self::assertSame($expectedCustomer, $customer);
    }
}
