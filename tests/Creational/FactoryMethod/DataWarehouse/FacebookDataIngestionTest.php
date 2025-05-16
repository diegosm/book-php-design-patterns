<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod\DataWarehouse;

use DesignPatterns\Creational\FactoryMethod\DataWarehouse\FacebookDataIngestion;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(FacebookDataIngestion::class)]
class FacebookDataIngestionTest extends TestCase
{
    #[Test]
    public function canUseFacebook(): void
    {
        $facebookDataIngestion = new FacebookDataIngestion();

        $this->assertSame(
            expected: 'Connected to Facebook.',
            actual: $facebookDataIngestion->ingest()
        );
    }
}
