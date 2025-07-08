<?php

class Controller
{
    private $cs_url;
    protected $cartData;

    public function __construct()
    {
        $this->cartData = ['subtotal' => 0, 'items' => []];
    }

    public function view($view, $data = [])
    {
        // Define possible paths for the view
        $possiblePaths = [
            __DIR__ . '/../views/' . $view . '.php',
            __DIR__ . '/../views/templates/' . $view . '.php',
            __DIR__ . '/../views/templates/Admin_' . basename($view) . '.php',
            __DIR__ . '/../views/templates/admin_' . basename($view) . '.php'
        ];

        // Try each possible path
        foreach ($possiblePaths as $path) {
            if (file_exists($path)) {
                require_once $path;
                return;
            }
        }

        // If no path is found, die with an error message
        die('View not found: ' . $view . '. Tried paths: ' . implode(', ', $possiblePaths));
    }

    /**
     * Outputs a link/script tag for a css/js asset.
     *
     * @param string $filename The filename of the asset.
     * @param string $fileType The type of asset. Can be either 'css', 'js', or 'group'.
     *                          If 'group', the function will output both a css and js tag.
     *                          If no type is given, the function will output nothing.
     */

    public function asset(string $filename, string $type = null): void
    {
        $minifiedSuffix = ENVIRONMENT === 'production' ? '.min' : '';
        $baseUrl = BASEURL;
        $filename = ENVIRONMENT === 'production' ? 'min/' . $filename : 'origin/' . $filename;

        switch ($type) {
            case 'css':
                echo '<link rel="stylesheet" href="' . $baseUrl . '/css/' . $filename . '.css">';
                break;
            case 'js':
                echo '<script src="' . $baseUrl . '/js/' . $filename . $minifiedSuffix . '.js"></script>';
                break;
            case 'group':
                echo '<link rel="stylesheet" href="' . $baseUrl . '/css/' . $filename . '.css">';
                echo '<script src="' . $baseUrl . '/js/' . $filename . $minifiedSuffix . '.js"></script>';
                break;
        }
    }



    public function model($model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }

    public function pageAdminNotFound()
    {
        $header['title'] = 'Page Not Found';
        $this->view('templates/admin_header', $header);
        $this->view('templates/admin_navbar');
        $this->view('templates/404');
        $this->view('templates/admin_footer');
    }

    public function redirectToHome(): void
    {
        header('Location: ' . BASEURL);
        exit;
    }

    public function startSession(): void
    {
        session_status() === PHP_SESSION_NONE && session_start();
    }

    public function sendJsonResponse(string $status, string $message, string $field = '', string $redirect = ''): void
    {
        header('Content-Type: application/json');
        echo json_encode(['status' => $status, 'message' => $message, 'field' => $field, 'redirect' => $redirect]);
        exit;
    }
}
