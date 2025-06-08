<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Adapters;

use DesignPatterns\Structural\Adapter\PaymentGateway\Contracts\PaymentGatewayInterface;
use DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty\MercadoPagoFakeAPI;

final readonly class MercadoPagoAdapter implements PaymentGatewayInterface
{
    public function __construct(protected MercadoPagoFakeAPI $client)
    {
    }

    public function charge(float $amount, string $currency): string
    {
        return $this->client->problematicMethod([
            'amount' => $amount,
            'currency' => $currency,
        ]);
    }
}
