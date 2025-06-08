<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\PaymentGateway\Thirdparty;

class EuropayFakeAPI
{
    /**
     * @param array{amount: float, currency: string} $data
     * @return string
     */
    public function createCharge(array $data): string
    {
        return "Charge On Europay " . $data['amount'] . " " . $data['currency'];
    }
}
