<?php

namespace myapp;

class Router
{
    private $routes = [];
    private $uri;
    private $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route) {
            if (($route['uri'] == $this->uri) && ($route['method'] == strtoupper($this->method))) {
                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }
}