<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\DataWarehouse;

use DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors\ConnectorInterface;
use DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors\DatabaseConnector;

class DatabaseDataIngestion extends DataIngestion
{
    public function getSource(): ConnectorInterface
    {
        return new DatabaseConnector();
    }
}
