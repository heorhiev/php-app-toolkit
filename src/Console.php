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
    public function __construct($action)
    {
        try {
            Route::start('console', $action);
        } catch (NotFoundException $exception) {
            Route::start('console', 'NotFound');
        }
    }
}