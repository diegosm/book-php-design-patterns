<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory\Notebook;

use DesignPatterns\Creational\AbstractFactory\Notebook\Contracts\NotebookAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Notebook\Factories\Notebook1;
use DesignPatterns\Creational\AbstractFactory\Notebook\Factories\Notebook2;
use DesignPatterns\Creational\AbstractFactory\Notebook\Factories\Notebook3;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[Small]
#[UsesClass(NotebookAbstractFactory::class)]
class NotebookTest extends TestCase
{
    #[Test]
    #[DataProvider('dataProvider')]
    public function canCreateNotebooks(
        NotebookAbstractFactory $factory,
        string $expectedDisplay,
        string $expectedMemory,
        string $expectedProcessor,
    ): void {
        $this->assertEquals(
            expected: $expectedDisplay,
            actual: $factory->createDisplay()->getName(),
        );

        $this->assertEquals(
            expected: $expectedMemory,
            actual: $factory->createMemory()->getName(),
        );

        $this->assertEquals(
            expected: $expectedProcessor,
            actual: $factory->createProcessor()->getName(),
        );
    }

    public static function dataProvider(): \Generator
    {
        yield "Notebook1 Configuration" => [
            new Notebook1(),
            '13 Display',
            '8 Gb',
            'I7',
        ];

        yield "Notebook2 Configuration" => [
            new Notebook2(),
            '13 Display',
            '16 Gb',
            'I7',
        ];


        yield "Notebook3 Configuration" => [
            new Notebook3(),
            '15 Display',
            '32 Gb',
            'I9',
        ];
    }
}
