<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics\Transports;

class Truck implements TransportInterface
{
    public function deliver(): string
    {
        return 'Truck delivered.';
    }
}
