<?php

declare(strict_types=1);

namespace Tests\Structural\Adapter\Conceptual;

use DesignPatterns\Structural\Adapter\Conceptual\Adapter;
use DesignPatterns\Structural\Adapter\Conceptual\Adaptee;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Adapter::class)]
class ConceptualTest extends TestCase
{
    #[Test]
    public function itAdaptsIncompatibleInterface(): void
    {
        $adaptee = new Adaptee();
        $adapter = new Adapter($adaptee);

        $this->assertSame(
            expected: 'Result of adaptee',
            actual: $adapter->method()
        );
    }
}
