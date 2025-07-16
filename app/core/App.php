<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    protected $routes = [];

    public function __construct()
    {
        $url = $this->parseURL();
        $this->routes = require_once './app/core/Routes.php';
        $this->route($url);
    }

    public function route($url)
    {
        if (!empty($url)) {
            // get url [0] and [1]
            $path = implode('/', array_slice($url, 0, 2));
            if (array_key_exists($path, $this->routes)) {
                $route = $this->routes[$path];
                [$this->controller, $this->method] = explode('@', $route);
                unset($url[0]);
                unset($url[1]);
            } else if (array_key_exists($url[0], $this->routes)) {
                $route = $this->routes[$url[0]];
                [$this->controller, $this->method] = explode('@', $route);
                unset($url[0]);
            }
        }

        require_once './app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
