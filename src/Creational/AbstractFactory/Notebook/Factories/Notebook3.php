<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Factories;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\DisplayInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\MemoryInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\ProcessorInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Displays\Display15;
use DesignPatterns\Creational\AbstractFactory\Notebook\Memories\Memory32Gb;
use DesignPatterns\Creational\AbstractFactory\Notebook\Processors\I9;

class Notebook3 implements NotebookAbstractFactory
{
    public function createMemory(): MemoryInterface
    {
        return new Memory32Gb();
    }

    public function createDisplay(): DisplayInterface
    {
        return new Display15();
    }

    public function createProcessor(): ProcessorInterface
    {
        return new I9();
    }
}
