<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Factories;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\DisplayInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\MemoryInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\ProcessorInterface;
use DesignPatterns\Creational\AbstractFactory\Notebook\Displays\Display13;
use DesignPatterns\Creational\AbstractFactory\Notebook\Memories\Memory8Gb;
use DesignPatterns\Creational\AbstractFactory\Notebook\Processors\I7;

class Notebook1 implements NotebookAbstractFactory
{
    public function createMemory(): MemoryInterface
    {
        return new Memory8Gb();
    }

    public function createDisplay(): DisplayInterface
    {
        return new Display13();
    }

    public function createProcessor(): ProcessorInterface
    {
        return new I7();
    }
}
