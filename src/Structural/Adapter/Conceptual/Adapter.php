<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Conceptual;

readonly class Adapter implements TargetInterface
{
    public function __construct(
        protected Adaptee $adaptee
    ) {
    }

    public function method(): string
    {
        return $this->adaptee->someSpecifMethod();
    }
}
