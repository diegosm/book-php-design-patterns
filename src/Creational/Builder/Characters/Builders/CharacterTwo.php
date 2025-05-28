<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Builders;

use DesignPatterns\Creational\Builder\Characters\Characters\Character;
use DesignPatterns\Creational\Builder\Characters\Contracts\BuilderInterface;
use DesignPatterns\Creational\Builder\Characters\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\Characters\Hats\FireFighter;
use DesignPatterns\Creational\Builder\Characters\Pants\Cargo;
use DesignPatterns\Creational\Builder\Characters\Shirts\Polo;

final readonly class CharacterTwo implements BuilderInterface
{
    private CharacterInterface $character;

    public function __construct()
    {
        $this->character = new Character();
    }

    public function setHat(): void
    {
        $this->character->setHat(
            new FireFighter()
        );
    }

    public function setPants(): void
    {
        $this->character->setPants(
            new Cargo()
        );
    }

    public function setShirt(): void
    {
        $this->character->setShirt(
            new Polo()
        );
    }

    public function getCharacter(): CharacterInterface
    {
        return $this->character;
    }
}
