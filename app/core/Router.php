<?php
namespace App\Core;

Class Router 
{ 

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($method == 'GET' && $uri == '/students') {
            require_once './app/controllers/StudentsController.php';
            $controller = new StudentController();
            $controller->index();
            return;

        }

        if ($method == 'GET' && $uri == '/students/create') {
            require_once './app/controllers/StudentsController.php';
            $controller = new StudentController();
            $controller->create();
            return;
        }

        http_response_code();
        echo '<h1>404 - Page Not Found</h1>';
    }

}

?>