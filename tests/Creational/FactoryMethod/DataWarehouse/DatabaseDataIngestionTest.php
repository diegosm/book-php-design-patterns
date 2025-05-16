<?php

declare(strict_types=1);

namespace Tests\Creational\FactoryMethod\DataWarehouse;

use DesignPatterns\Creational\FactoryMethod\DataWarehouse\DatabaseDataIngestion;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(DatabaseDataIngestion::class)]
class DatabaseDataIngestionTest extends TestCase
{
    #[Test]
    public function canUseDatabase(): void
    {
        $databaseDataIngestion = new DatabaseDataIngestion();

        $this->assertSame(
            expected: 'Connected to database.',
            actual: $databaseDataIngestion->ingest()
        );
    }
}
