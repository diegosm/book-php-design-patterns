<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Adapters;

use DesignPatterns\Structural\Adapter\PaymentGateway\Contracts\PaymentGatewayInterface;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\StripeFakeAPI;

final readonly class StripeAdapter implements PaymentGatewayInterface
{
    public function __construct(protected StripeFakeAPI $client)
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
