<?php

use League\Plates\Engine;

abstract class Controller
{
    public static function view(string $view, array $data = [])
    {
        $viewPath = dirname(__FILE__, 2) . "/Views/{$view}.php";
        $templates = new Engine($viewPath);
        echo $templates->render($view, $data);
    }
}