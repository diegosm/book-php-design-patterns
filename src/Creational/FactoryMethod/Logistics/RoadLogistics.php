<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics;

use DesignPatterns\Creational\FactoryMethod\Logistics\Transports\TransportInterface;
use DesignPatterns\Creational\FactoryMethod\Logistics\Transports\Truck;

class RoadLogistics extends Logistics
{
    protected function createTransport(): TransportInterface
    {
        return new Truck();
    }
}
