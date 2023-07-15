<?php

namespace app\toolkit;

use app\toolkit\components\exceptions\NotFoundException;
use app\toolkit\services\http\RequestService;

class Http
{
    /**
     * @throws NotFoundException
     */
    public function __construct()
    {
        try {
            Route::start('http', RequestService::get('action'));
        } catch (NotFoundException $exception) {
            Route::start('http', 'NotFound');
        }
    }
}