<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Conceptual\Contracts;

interface Builder
{
    public function buildPartA(): void;
    public function buildPartB(): void;
    public function buildPartC(): void;
}
