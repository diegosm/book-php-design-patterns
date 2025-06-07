<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Conceptual;

class Adaptee
{
    public function someSpecifMethod(): string
    {
        return "Result of adaptee";
    }
}
