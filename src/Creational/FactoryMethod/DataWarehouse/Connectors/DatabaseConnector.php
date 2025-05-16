<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors;

class DatabaseConnector implements ConnectorInterface
{
    public function connect(): string
    {
        return "Connected to database.";
    }
}
