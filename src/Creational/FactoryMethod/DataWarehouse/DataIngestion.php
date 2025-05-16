<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\DataWarehouse;

use DesignPatterns\Creational\FactoryMethod\DataWarehouse\Connectors\ConnectorInterface;

abstract class DataIngestion
{
    abstract public function getSource(): ConnectorInterface;

    public function ingest(): string
    {
        return $this->getSource()->connect();
    }
}
