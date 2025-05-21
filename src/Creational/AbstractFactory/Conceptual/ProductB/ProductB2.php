<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Conceptual\ProductB;

use DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts\AbstractProductB;

class ProductB2 implements AbstractProductB
{
    public function getName(): string
    {
        return "Product B2";
    }
}
