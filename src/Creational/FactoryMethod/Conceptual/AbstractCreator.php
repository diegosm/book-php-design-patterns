<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Conceptual;

abstract class AbstractCreator
{
    abstract public function factoryMethod(): ProductInterface;

    public function someOperation(): string
    {
        return $this->factoryMethod()->operation();
    }
}
