<?php

namespace app\toolkit\components;

use app\toolkit\components\exceptions\NotFoundException;


class Route
{
    /**
     * @throws NotFoundException
     */
    public static function start($side, ?string $action)
    {
        if ($action) {
            $basePath = 'app\toolkit\controllers\\';

            $relativePath = explode('/', $action);

            $controllerName = ucfirst(array_pop($relativePath)) .  'Controller';

            $relativePath = $relativePath ? join('\\', $relativePath) . '\\' : '';

            $controllerPath = $basePath . $side . '\\' . $relativePath . $controllerName;

            if (class_exists($controllerPath)) {
                session_start();
                $controller = new $controllerPath();

                return $controller->main();
            }
        }

        throw new NotFoundException();
    }
}