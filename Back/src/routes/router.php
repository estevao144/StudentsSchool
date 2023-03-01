<?php

function loading(string $controller, string $action)
{
    try{      
 // se existe Controller
 $controllerNamespace = "Escola\\Controllers\\{$controller}";
 var_dump($controllerNamespace);
    
 if (!class_exists($controllerNamespace)) {
     throw new Exception("Controller {$controller} nao existe");
}
    $controllerInstance = new $controllerNamespace();

 if(!method_exists($controllerInstance, $action)) {
     throw new Exception("Action {$action} nao existe no controller {$controller}");
}
    $controllerInstance->$action();
}catch(Exception $e) {
    echo $e->getMessage();
}
    
    $router = [
        "GET" => [
            "/" => loading("HomeController.php", "index"),
            "/alunos" => loading("alunosController.php", "index"),
            // "/alunos/{id}" => loading("alunosController.php", "index"),
        ],
        "POST" => [
            "/alunos" => loading("alunosController.php", "show"),
            // "/alunos/{id}" => loading("alunosController.php", "s"),
        ]
    ];

}
