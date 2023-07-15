<?php

namespace app\toolkit\services\db;

use app\toolkit\dto\config\DatabaseDto;
use app\toolkit\services\Service;
use app\toolkit\services\SettingsService;
use mysqli;


class DBService extends Service
{
    private static $mysqli;


    public static function getMysqli(): mysqli
    {
        if (!self::$mysqli) {
            /** @var DatabaseDto $options */
            $options = SettingsService::load('database', DatabaseDto::class);
            self::$mysqli = new mysqli($options->host, $options->username, $options->password, $options->name);;
        }

        return self::$mysqli;
    }
}