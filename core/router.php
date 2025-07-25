<?php
class router {
    public static function route($uri) {
        $parts = explode('/', trim($uri, '/'));
        $controllerName = !empty($parts[0]) ? $parts[0] . 'controller' : 'homeController';
        $method = $parts[1] ?? 'index';
        $params = array_slice($parts, 2);

        $controllerFile = __DIR__ . "/../app/controllers/{$controllerName}.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $params);
            } else {
                echo "Method not found.";
            }
        } else {
            echo "Controller not found.";
        }
    }
}
