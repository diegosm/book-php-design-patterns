<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Memories;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\MemoryInterface;

class Memory16Gb implements MemoryInterface
{
    public function getName(): string
    {
        return "16 Gb";
    }
}
