<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Hats;

use DesignPatterns\Creational\Builder\Characters\Contracts\HatInterface;

final readonly class Cap implements HatInterface
{
    public function getName(): string
    {
        return 'Cap';
    }
}
