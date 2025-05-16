<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod\Conceptual;

use DesignPatterns\Creational\FactoryMethod\Conceptual\ConcreteCreator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(ConcreteCreator::class)]
class ConcreteCreatorTest extends TestCase
{
    #[Test]
    public function canCallTheOperation(): void
    {
        $concreteCreator = new ConcreteCreator();

        $this->assertSame(
            expected: 'Result of ConcreteProduct',
            actual: $concreteCreator->someOperation()
        );
    }
}
