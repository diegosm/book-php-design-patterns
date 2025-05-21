<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts;

abstract class AbstractFactory
{
    abstract public function createProductA(): AbstractProductA;
    abstract public function createProductB(): AbstractProductB;
}
