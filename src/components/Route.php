<?php

namespace app\toolkit\components;

use app\toolkit\components\exceptions\NotFoundException;


class Route
{
    private static $_routes;

    /**
     * @throws NotFoundException
     */
    public static function start($side, $action)
    {
        if ($action) {
            $basePath = 'app\toolkit\controllers\\';

            $relativePath = explode('/', $action);

            $controllerName = ucfirst(array_pop($relativePath)) .  'Controller';

            $relativePath = $relativePath ? join('\\', $relativePath) . '\\' : '';

            $controllerPath = $basePath . $side . '\\' . $relativePath . $controllerName;

            if (class_exists($controllerPath)) {
                session_start();
                (new $controllerPath())->main();
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