<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Adapters;

use DesignPatterns\Structural\Adapter\PaymentGateway\Contracts\PaymentGatewayInterface;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\EuropayFakeAPI;

final readonly class EuropayAdapter implements PaymentGatewayInterface
{
    public function __construct(protected EuropayFakeAPI $client)
    {
    }

    public function charge(float $amount, string $currency): string
    {
        return $this->client->createCharge([
            'amount' => $amount,
            'currency' => $currency,
        ]);
    }
}
