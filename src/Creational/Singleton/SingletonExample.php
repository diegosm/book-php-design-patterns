<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

final class SingletonExample
{
    private static ?self $instance = null;

    private function __construct()
    {
        //
    }

    public static function getInstance(): self
    {
        return self::$instance ??= new self();
    }

    private function __clone()
    {
        //
    }
}
