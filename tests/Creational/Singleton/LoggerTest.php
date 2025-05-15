<?php

declare(strict_types=1);

namespace Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Logger;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Logger::class)]
class LoggerTest extends TestCase
{
    #[Test]
    public function instancesAreIdentical(): void
    {
        $instance1 = Logger::getInstance();
        $instance2 = Logger::getInstance();

        $this->assertSame(
            expected: $instance1,
            actual: $instance2,
            message: 'Singleton instances are the same.'
        );
    }
}
