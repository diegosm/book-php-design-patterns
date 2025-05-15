<?php

declare(strict_types=1);

namespace Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\SingletonExample;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(SingletonExample::class)]
class SingletonTest extends TestCase
{
    #[Test]
    public function instancesAreIdentical(): void
    {
        $instance1 = SingletonExample::getInstance();
        $instance2 = SingletonExample::getInstance();

        $this->assertSame(
            expected: $instance1,
            actual: $instance2,
            message:'Singleton instances are not the same.'
        );
    }
}
