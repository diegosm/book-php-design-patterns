<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Displays;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\DisplayInterface;

class Display15 implements DisplayInterface
{
    public function getName(): string
    {
        return "15 Display";
    }
}
