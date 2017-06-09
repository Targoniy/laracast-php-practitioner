<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requesType)
    {
        if (array_key_exists($uri, $this->routes[$requesType])) {

            return $this->routes[$requesType][$uri];

        }

        throw new Exception('No routes define');

    }
}
