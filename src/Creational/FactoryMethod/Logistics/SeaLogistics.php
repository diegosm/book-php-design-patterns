<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics;

use DesignPatterns\Creational\FactoryMethod\Logistics\Transports\Ship;
use DesignPatterns\Creational\FactoryMethod\Logistics\Transports\TransportInterface;

class SeaLogistics extends Logistics
{
    protected function createTransport(): TransportInterface
    {
        return new Ship();
    }
}
