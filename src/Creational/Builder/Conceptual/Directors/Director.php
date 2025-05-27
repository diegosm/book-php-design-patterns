<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Conceptual\Directors;

use DesignPatterns\Creational\Builder\Conceptual\Contracts\Builder;

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function build(): void
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
    }
}
