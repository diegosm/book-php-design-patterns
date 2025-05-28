<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Contracts;

interface BuilderInterface
{
    public function setHat(): void;
    public function setPants(): void;
    public function setShirt(): void;
    public function getCharacter(): CharacterInterface;
}
