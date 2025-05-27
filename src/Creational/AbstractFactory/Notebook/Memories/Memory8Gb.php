<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Memories;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\MemoryInterface;

class Memory8Gb implements MemoryInterface
{
    public function getName(): string
    {
        return "8 Gb";
    }
}
