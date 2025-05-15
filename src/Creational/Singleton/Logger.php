<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

final class Logger
{
    protected static ?self $instance = null;

    protected function __construct()
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
