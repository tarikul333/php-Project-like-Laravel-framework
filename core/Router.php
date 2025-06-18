<?php

namespace Core;

class Router
{
    protected static $routes = [];

    protected static function add($uri, $controller, $method)
    {
        static::$routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return new static();
    }

    public static function get($uri, $controller)
    {
        return self::add($uri, $controller, 'GET');
    }
    public static function post($uri, $controller)
    {
        return self::add($uri, $controller, 'POST');
    }
    public static function put($uri, $controller)
    {
        return self::add($uri, $controller, 'PUT');
    }
    public static function patch($uri, $controller)
    {
        return self::add($uri, $controller, 'PATCH');
    }
    public static function delete($uri, $controller)
    {
        return self::add($uri, $controller, 'DELETE');
    }

    public function only($key)
    {
        self::$routes[array_key_last(self::$routes)]['middleware'] = $key;
    }

    protected static function checkMiddleware($middleware)
    {
        if ($middleware === 'guest' && isset($_SESSION['user'])) {
            header('location: /posts');
            exit;
        }

        if ($middleware === 'auth' && !isset($_SESSION['user'])) {
            header('location: /login');
            exit;
        }
    }


    public static function route($uri, $method)
    {
        foreach (self::$routes as $route) {
            if ($route['url'] === $uri && $route['method'] === strtoupper($method)) {

                self::checkMiddleware($route['middleware']);

                $controller = $route['controller'];

                if (is_array($controller)) {
                    [$class, $method] = $controller;
                    $instance = new $class();
                    return call_user_func([$instance, $method]);
                }

                return require basePath($controller);
            }
        }

        self::abort();
    }

    protected static function abort($code = '404')
    {
        http_response_code(404);
        die();
    }
}
