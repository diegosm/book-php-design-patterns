<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Characters;

use DesignPatterns\Creational\Builder\Characters\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\Characters\Contracts\HatInterface;
use DesignPatterns\Creational\Builder\Characters\Contracts\PantsInterface;
use DesignPatterns\Creational\Builder\Characters\Contracts\ShirtInterface;

final class Character implements CharacterInterface
{
    private HatInterface $hat;
    private PantsInterface $pants;
    private ShirtInterface $shirt;

    public function setHat(HatInterface $hat): void
    {
        $this->hat = $hat;
    }

    public function getHat(): HatInterface
    {
        return $this->hat;
    }

    public function setPants(PantsInterface $pants): void
    {
        $this->pants = $pants;
    }

    public function getPants(): PantsInterface
    {
        return $this->pants;
    }

    public function setShirt(ShirtInterface $shirt): void
    {
        $this->shirt = $shirt;
    }

    public function getShirt(): ShirtInterface
    {
        return $this->shirt;
    }
}
