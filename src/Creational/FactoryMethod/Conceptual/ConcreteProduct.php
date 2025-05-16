<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Conceptual;

class ConcreteProduct implements ProductInterface
{
    public function operation(): string
    {
        return 'Result of ConcreteProduct';
    }
}
