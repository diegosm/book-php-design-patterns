<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod\Logistics;

use DesignPatterns\Creational\FactoryMethod\Logistics\RoadLogistics;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(RoadLogistics::class)]
class RoadLogisticsTest extends TestCase
{
    #[Test]
    public function canDeliverByTruck(): void
    {
        $roadLogistics = new RoadLogistics();

        $this->assertEquals(
            expected: 'Truck delivered.',
            actual: $roadLogistics->planDelivery()
        );
    }
}
