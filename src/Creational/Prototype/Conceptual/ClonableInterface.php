<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\Conceptual;

interface ClonableInterface
{
    public function clone(): static;
}
