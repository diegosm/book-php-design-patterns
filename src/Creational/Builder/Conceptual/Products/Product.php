<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Conceptual\Products;

class Product
{
    /** @var string[] */
    private array $parts = [];

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }

    /**
     * @return string[]
     */
    public function getParts(): array
    {
        return $this->parts;
    }
}
