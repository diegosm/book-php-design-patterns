<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\Conceptual;

final readonly class ConcreteA implements ClonableInterface
{
    public function __construct(
        protected string $name = 'Name'
    ) {
    }

    public function clone(): static
    {
        return new static($this->name);
    }
}
