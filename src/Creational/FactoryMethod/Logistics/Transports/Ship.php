<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics\Transports;

class Ship implements TransportInterface
{
    public function deliver(): string
    {
        return 'Ship delivered.';
    }
}
