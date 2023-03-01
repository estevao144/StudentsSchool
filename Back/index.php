<?php

use Escola\Aluno;
use Escola\Escola;
use Escola\Matricula;

require 'vendor/autoload.php';
require '../Back/src/routes/router.php';

$escola = new Escola();
$aluno = new Aluno("Joaquim", "135132013", 1);

$matricula = new Matricula($aluno, 1);
$matricula->setNota(100);

$escola->adicionaAluno($matricula);


var_dump($escola->getAlunosAprovados());

try{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];
    var_dump($uri, " ",$request);
    
    if(!isset($routes[$request])) {
        throw new Exception("Rota {$uri} nao existe");
    }

    if(!array_key_exists($uri, $router[$request])) {
        throw new Exception("Rota {$request} nao existe");
    }
    
    $router[$request][$uri]();
} catch(Exception $e) {
  echo  $e->getMessage();
}


