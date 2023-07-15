<?php

namespace app\toolkit\services\console;

use app\toolkit\services\Service;


class ArgvService extends Service
{
    public static function getCommand($argv): ?string
    {
        if (isset($argv[1])) {
            return $argv[1];
        }

        return null;
    }
}