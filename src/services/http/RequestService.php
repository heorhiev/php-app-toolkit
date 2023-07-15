<?php

namespace app\toolkit\services\http;
 

use app\toolkit\services\ArrayService;
use app\toolkit\services\Service;

class RequestService extends Service
{
    public static function get(string $name = null)
    {
        return ArrayService::getValue($_GET, $name, $_GET);
    }


    public static function post(string $name = null)
    {
        return ArrayService::getValue($_POST, $name, $_POST);
    }
}    