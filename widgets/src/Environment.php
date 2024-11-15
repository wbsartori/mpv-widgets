<?php

declare(strict_types=1);

namespace Dashboards;

use Dotenv\Dotenv;

class Environment
{
    public function __construct(string $filename = '.env', int $directoryLevel = 2)
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
