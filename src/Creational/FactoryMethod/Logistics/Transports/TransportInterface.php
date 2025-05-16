<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Logistics\Transports;

interface TransportInterface
{
    public function deliver(): string;
}
