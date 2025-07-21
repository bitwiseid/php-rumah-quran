<?php
class AdminApp
{
    protected $controller = 'dashboard';
    protected $method = 'index';
    protected $params = [];
    protected $routes = [];


    public function __construct()
    {
        $url = $this->parseURL();
        $routes = require_once __DIR__ . '/Routes.php';
        $this->routes = $routes['admin'];
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

        if (!isset($_SESSION['role']) && $this->controller !== "login") {
            $this->controller = 'login';
            $this->method = 'index';
        } else if (isset($_SESSION['role']) && $_SESSION['role'] === "orang tua" && $this->controller === "dashboard") {
            // Redirect orang tua to monitoring page by default
            $this->controller = 'orang_tua';
            $this->method = 'monitoring';
        }



        // Normalize controller name (first letter uppercase)
        $this->controller = ucfirst(strtolower($this->controller));

        // Determine the base path dynamically
        $basePath = realpath(dirname(__FILE__) . '/../..');

        // Possible controller paths
        $controllerPaths = [
            $basePath . '/app/controllers/admin/' . $this->controller . '.php',
            $basePath . '/app/controllers/admin/' . strtolower($this->controller) . '.php',
            __DIR__ . '/../controllers/admin/' . $this->controller . '.php',
            __DIR__ . '/../controllers/admin/' . strtolower($this->controller) . '.php'
        ];

        // Try multiple paths
        $foundPath = false;
        foreach ($controllerPaths as $path) {
            if (file_exists($path)) {
                $foundPath = $path;
                break;
            }
        }

        // Load the controller
        if ($foundPath) {
            require_once $foundPath;
            $this->controller = new $this->controller;

            if (!empty($url)) {
                $this->params = array_values($url);
            }

            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            // Detailed error logging
            error_log('Controller not found: ' . $this->controller);
            error_log('Attempted paths:');
            foreach ($controllerPaths as $path) {
                error_log($path);
            }
            die('Controller not found: ' . $this->controller);
        }

        // Session and default route logic
        if (!isset($_SESSION['role']) && $this->controller !== "Login") {
            $this->controller = 'Login';
            $this->method = 'index';
        }

        if (!isset($this->method)) {
            $this->controller = 'Dashboard';
            $this->method = 'index';
        }
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
