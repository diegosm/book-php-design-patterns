<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Directors;

use DesignPatterns\Creational\Builder\Characters\Contracts\BuilderInterface;

final class Director
{
    private BuilderInterface $builder;

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function build(): void
    {
        $this->builder->setHat();
        $this->builder->setPants();
        $this->builder->setShirt();
    }
}
