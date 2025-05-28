<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Builders;

use DesignPatterns\Creational\Builder\Characters\Characters\Character;
use DesignPatterns\Creational\Builder\Characters\Contracts\BuilderInterface;
use DesignPatterns\Creational\Builder\Characters\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\Characters\Hats\Cap;
use DesignPatterns\Creational\Builder\Characters\Pants\Short;
use DesignPatterns\Creational\Builder\Characters\Shirts\Shirt;

final readonly class CharacterOne implements BuilderInterface
{
    private Character $character;

    public function __construct()
    {
        $this->character = new Character();
    }

    public function setHat(): void
    {
        $this->character->setHat(
            new Cap()
        );
    }

    public function setPants(): void
    {
        $this->character->setPants(
            new Short()
        );
    }

    public function setShirt(): void
    {
        $this->character->setShirt(
            new Shirt()
        );
    }

    public function getCharacter(): CharacterInterface
    {
        return $this->character;
    }
}
