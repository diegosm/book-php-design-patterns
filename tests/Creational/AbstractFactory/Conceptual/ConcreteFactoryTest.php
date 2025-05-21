<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory\Conceptual;

use DesignPatterns\Creational\AbstractFactory\Conceptual\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Conceptual\Factories\ConcreteFactory1;
use DesignPatterns\Creational\AbstractFactory\Conceptual\Factories\ConcreteFactory2;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductA\ProductA1;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductA\ProductA2;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductB\ProductB1;
use DesignPatterns\Creational\AbstractFactory\Conceptual\ProductB\ProductB2;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(ConcreteFactory1::class)]
class ConcreteFactoryTest extends TestCase
{
    #[Test]
    #[DataProvider('validProductsDataProvider')]
    public function mustReturnValidProduct(
        AbstractFactory $factory,
        string $product1,
        string $product2,
    ): void {
        $this->assertInstanceOf(
            expected: $product1,
            actual: $factory->createProductA()
        );

        $this->assertInstanceOf(
            expected: $product2,
            actual: $factory->createProductB()
        );
    }

    public static function validProductsDataProvider(): \Generator
    {
        yield "Case 1" => [
            "factory" => new ConcreteFactory1(),
            "product1" => ProductA1::class,
            "product2" => ProductB1::class,
        ];

        yield "Case 2" => [
            "factory" => new ConcreteFactory2(),
            "product1" => ProductA2::class,
            "product2" => ProductB2::class,
        ];
    }
}
