<?php

declare(strict_types=1);

namespace Tests\Creational\Builder\Characters;

use DesignPatterns\Creational\Builder\Characters\Builders\CharacterOne;
use DesignPatterns\Creational\Builder\Characters\Builders\CharacterTwo;
use DesignPatterns\Creational\Builder\Characters\Contracts\BuilderInterface;
use DesignPatterns\Creational\Builder\Characters\Directors\Director;
use DesignPatterns\Creational\Builder\Characters\Hats\Cap;
use DesignPatterns\Creational\Builder\Characters\Hats\FireFighter;
use DesignPatterns\Creational\Builder\Characters\Pants\Cargo;
use DesignPatterns\Creational\Builder\Characters\Pants\Short;
use DesignPatterns\Creational\Builder\Characters\Shirts\Polo;
use DesignPatterns\Creational\Builder\Characters\Shirts\Shirt;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Director::class)]
class DirectorTest extends TestCase
{
    public static function dataProvider(): \Generator
    {
        yield 'Character One - or builder one' => [
            new CharacterOne(),
            Cap::class,
            Short::class,
            Shirt::class,
        ];

        yield 'Character Two' => [
            new CharacterTwo(),
            FireFighter::class,
            Cargo::class,
            Polo::class,
        ];
    }

    #[Test]
    #[DataProvider('dataProvider')]
    public function mustBuildTheCharacter(
        BuilderInterface $builder,
        string $expectedHat,
        string $expectedPants,
        string $expectedShirt,
    ): void {
        // if you run this:
        // var_dump($character->getCharacter());
        // you will see that the character is not built yet, with unitialized properties.

        $director = new Director();
        $director->setBuilder($builder);
        $director->build();

        $character = $builder->getCharacter();

        // now the character is built and we can do assertions
        $this->assertInstanceOf(
            expected: $expectedHat,
            actual: $character->getHat()
        );

        $this->assertInstanceOf(
            expected: $expectedPants,
            actual: $character->getPants()
        );

        $this->assertInstanceOf(
            expected: $expectedShirt,
            actual: $character->getShirt()
        );
    }
}
