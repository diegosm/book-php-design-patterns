<?php

declare(strict_types=1);

namespace Tests\Creational\Builder\Conceptual;

use DesignPatterns\Creational\Builder\Conceptual\Builders\ConcreteBuilderA;
use DesignPatterns\Creational\Builder\Conceptual\Builders\ConcreteBuilderB;
use DesignPatterns\Creational\Builder\Conceptual\Contracts\Builder;
use DesignPatterns\Creational\Builder\Conceptual\Directors\Director;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Director::class)]
class ConceptualTest extends TestCase
{
    #[Test]
    #[DataProvider('builderProvider')]
    public function builderCreatesExpectedProduct(
        Builder $builder,
        array $expectedParts
    ): void {
        $director = new Director();
        $director->setBuilder($builder);
        $director->build();

        $this->assertEquals(
            $expectedParts,
            $builder->getProduct()->getParts()
        );
    }

    public static function builderProvider(): array
    {
        return [
            'ConcreteBuilderA' => [
                new ConcreteBuilderA(),
                ['Part A.A.', 'Part A.B.', 'Part A.C.'],
            ],
            'ConcreteBuilderB' => [
                new ConcreteBuilderB(),
                ['Part B.A.', 'Part B.B.', 'Part B.C.'],
            ],
        ];
    }
}
