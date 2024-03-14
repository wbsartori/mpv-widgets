<?php

namespace Dashboards\Core;

use Dotenv\Dotenv;

class Environment
{
    public function __construct(string $filename = '.env', int $directoryLevel = 3)
    {
        (Dotenv::createImmutable(
            dirname(
                __DIR__,
                $directoryLevel
            ),
            $filename
        ))->load();
    }
}
