<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Displays;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\DisplayInterface;

class Display13 implements DisplayInterface
{
    public function getName(): string
    {
        return "13 Display";
    }
}
