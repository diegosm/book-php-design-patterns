<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics;

use DesignPatterns\Creational\FactoryMethod\Logistics\Transports\TransportInterface;

abstract class Logistics
{
    abstract protected function createTransport(): TransportInterface;

    public function planDelivery(): string
    {
        return $this->createTransport()->deliver();
    }
}
