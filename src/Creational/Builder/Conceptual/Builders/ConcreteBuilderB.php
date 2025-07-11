<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Conceptual\Builders;

use DesignPatterns\Creational\Builder\Conceptual\Contracts\Builder;
use DesignPatterns\Creational\Builder\Conceptual\Products\Product;

class ConcreteBuilderB implements Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA(): void
    {
        $this->product->addPart('Part B.A.');
    }

    public function buildPartB(): void
    {
        $this->product->addPart('Part B.B.');
    }

    public function buildPartC(): void
    {
        $this->product->addPart('Part B.C.');
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
