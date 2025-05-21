<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Conceptual\Factories;

use DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductA\ProductA2;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductB\ProductB2;

class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}
