<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Notebook\Processors;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\ProcessorInterface;

class I9 implements ProcessorInterface
{
    public function getName(): string
    {
        return "I9";
    }
}
