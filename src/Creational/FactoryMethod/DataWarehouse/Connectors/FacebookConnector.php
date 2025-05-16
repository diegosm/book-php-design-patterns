<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors;

class FacebookConnector implements ConnectorInterface
{
    public function connect(): string
    {
        return "Connected to Facebook.";
    }
}
