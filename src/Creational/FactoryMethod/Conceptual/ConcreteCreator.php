<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Conceptual;

class ConcreteCreator extends AbstractCreator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct();
    }
}
