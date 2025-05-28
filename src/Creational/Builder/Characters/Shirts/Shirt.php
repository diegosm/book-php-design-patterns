<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Shirts;

use DesignPatterns\Creational\Builder\Characters\Contracts\ShirtInterface;

final readonly class Shirt implements ShirtInterface
{
    public function getName(): string
    {
        return 'Shirt';
    }
}
