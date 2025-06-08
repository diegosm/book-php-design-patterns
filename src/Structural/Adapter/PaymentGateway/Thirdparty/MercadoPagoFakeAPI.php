<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty;

class MercadoPagoFakeAPI
{
    /**
     * @param array{amount: float, currency: string} $data
     * @return string
     */
    public function problematicMethod(array $data): string
    {
        return "Charge On MercadoPago " . $data['amount'] . " " . $data['currency'];
    }
}
