<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod\Logistics;

use DesignPatterns\Creational\FactoryMethod\Logistics\SeaLogistics;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(SeaLogistics::class)]
class SeaLogisticTest extends TestCase
{
    #[Test]
    public function canDeliverByShip(): void
    {
        $seaLogistics = new SeaLogistics();

        $this->assertSame(
            expected: 'Ship delivered.',
            actual: $seaLogistics->planDelivery()
        );
    }
}
