<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Pants;

use DesignPatterns\Creational\Builder\Characters\Contracts\PantsInterface;

final readonly class Short implements PantsInterface
{
    public function getName(): string
    {
        return 'Short';
    }
}
