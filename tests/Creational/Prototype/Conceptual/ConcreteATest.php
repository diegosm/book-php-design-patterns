<?php

declare(strict_types=1);

namespace Tests\Creational\Prototype\Conceptual;

use DesignPatterns\Creational\Prototype\Conceptual\ConcreteA;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(ConcreteA::class)]
class ConcreteATest extends TestCase
{
    #[Test]
    public function canCloneTheObject(): void
    {
        $concrete = new ConcreteA('My name');
        $cloned   = $concrete->clone();

        $this->assertNotSame(
            expected: $concrete,
            actual: $cloned
        );
    }
}
