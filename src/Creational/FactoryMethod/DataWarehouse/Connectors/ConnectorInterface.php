<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors;

interface ConnectorInterface
{
    public function connect(): string;
}
