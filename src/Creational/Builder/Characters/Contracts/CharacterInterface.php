<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Characters\Contracts;

interface CharacterInterface
{
    public function setHat(HatInterface $hat): void;
    public function getHat(): HatInterface;
    public function setPants(PantsInterface $pants): void;
    public function getPants(): PantsInterface;
    public function setShirt(ShirtInterface $shirt): void;
    public function getShirt(): ShirtInterface;
}
