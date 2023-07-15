<?php

namespace app\toolkit;

use app\toolkit\components\exceptions\NotFoundException;
use app\toolkit\services\console\ArgvService;
use app\toolkit\components\Route;


class Console
{
    /**
     * @throws NotFoundException
     */
    public function __construct($argv)
    {
        try {
            Route::start('console', ArgvService::getCommand($argv));
        } catch (NotFoundException $exception) {
            Route::start('console', 'NotFound');
        }
    }
}