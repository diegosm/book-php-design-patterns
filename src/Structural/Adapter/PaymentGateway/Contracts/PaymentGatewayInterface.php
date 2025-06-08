<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Contracts;

interface PaymentGatewayInterface
{
    public function charge(float $amount, string $currency): string;
}
