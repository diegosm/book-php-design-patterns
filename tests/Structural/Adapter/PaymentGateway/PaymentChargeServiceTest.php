<?php

declare(strict_types=1);

namespace Tests\Structural\Adapter\PaymentGateway;

use DesignPatterns\Structural\Adapter\PaymentGateway\Adapters\EuropayAdapter;
use DesignPatterns\Structural\Adapter\PaymentGateway\Adapters\MercadoPagoAdapter;
use DesignPatterns\Structural\Adapter\PaymentGateway\Adapters\StripeAdapter;
use DesignPatterns\Structural\Adapter\PaymentGateway\Contracts\PaymentGatewayInterface;
use DesignPatterns\Structural\Adapter\PaymentGateway\PaymentChargeService;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\EuropayFakeAPI;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\MercadoPagoFakeAPI;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\StripeFakeAPI;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(PaymentChargeService::class)]
class PaymentChargeServiceTest extends TestCase
{
    #[Test]
    #[DataProvider('gatewayProviders')]
    public function test(
        PaymentGatewayInterface $adapter,
        float $amount,
        string $currency,
        string $expected
    ): void {
        $gateway = new PaymentChargeService($adapter);

        $this->assertEquals(
            expected: $expected,
            actual: $gateway->charge($amount, $currency)
        );
    }

    public static function gatewayProviders(): iterable
    {
        yield 'Stripe adapter with the problematic StripeAPI class as adaptee' => [
            new StripeAdapter(new StripeFakeAPI()),
            100,
            'USD',
            'Charge On Stripe 100 USD',
        ];

        yield 'Euro adapter with the problematic EuroAPI class as adaptee' => [
            new EuropayAdapter(new EuropayFakeAPI()),
            200,
            'EUR',
            'Charge On Europay 200 EUR',
        ];

        yield 'MercadoPago adapter with the problematic MP class as adaptee' => [
            new MercadoPagoAdapter(new MercadoPagoFakeAPI()),
            300,
            'BRL',
            'Charge On MercadoPago 300 BRL',
        ];
    }
}
