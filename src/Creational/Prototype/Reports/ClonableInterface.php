<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\Reports;

interface ClonableInterface
{
    public function clone(): static;
}
