<?php

class Router
{
    private $routes = [];

    // Define uma rota GET
    public function get($path, $controller)
    {
        $this->routes['GET'][$path] = $controller;
    }

    // Define uma rota POST
    public function post($path, $controller)
    {
        $this->routes['POST'][$path] = $controller;
    }

    // Define uma rota DELETE
    public function delete($path, $controller)
    {
        $this->routes['DELETE'][$path] = $controller;
    }

    // Executa o roteador
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];

        if (isset($this->routes[$method][$path])) {
            $file = $this->routes[$method][$path];
            require_once __DIR__ . "/$file";
        } else {
            http_response_code(404);
            echo "Página não encontrada.";
        }
    }
}