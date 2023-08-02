<?php

namespace app\toolkit\components;

use app\toolkit\components\exceptions\NotFoundException;
use app\toolkit\services\LoggerService;


class Route
{
    private static $_routes = [];

    /**
     * @throws NotFoundException
     */
    public static function start($side, $action)
    {
        if (!empty(self::$_routes[$action])) {
            $controllerPath = self::$_routes[$action];

            if (class_exists($controllerPath)) {
                session_start();

                try {
                    return (new $controllerPath())->main();
                } catch (\Throwable $e) {
                    LoggerService::error($e->getMessage());
                }
            }
        }

        throw new NotFoundException();
    }


    public static function add(array $routes): bool
    {
        self::$_routes = array_merge(self::$_routes, $routes);
        return true;
    }
}