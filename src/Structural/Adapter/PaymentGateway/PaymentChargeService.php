<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway;

use DesignPatterns\Structural\Adapter\PaymentGateway\Contracts\PaymentGatewayInterface;

class PaymentChargeService
{
    public function __construct(
        protected PaymentGatewayInterface $paymentGateway
    ) {
    }

    public function charge(float $amount, string $currency): string
    {
        return $this->paymentGateway->charge($amount, $currency);
    }
}
