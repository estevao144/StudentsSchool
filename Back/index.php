<?php
//index.php

require 'vendor/autoload.php';
use FastRoute\RouteCollector;

use Escola\Aluno;
use Escola\Matricula;
use Escola\Escola;

$escola = new Escola();

$matricula1 = new Matricula(new Aluno('João', '091.359.036-35'), 1);
$matricula2 = new Matricula(new Aluno('Maria', '091.359.136-36'), 2);
$matricula1->setNota(10);
$matricula2->setNota(80);
$escola->adicionaAluno($matricula1, $matricula2);

$notas = $escola->calcularNotas();

$aluno = new Aluno('João', '091.359.036-35');

echo "Notas do aluno ".$aluno->getNome().": ";

foreach ($escola->matriculas as $matricula) {
    if ($matricula->getAluno()->getCpf() == $aluno->getCpf()) {
        echo $matricula->getNota().", ";
    }
}

echo("escola: ".$escola->getAll()[0]->getAluno()->getNome());


// var_dump($escola->calcularNotas());
// print_r($aluno->getCpf());


// Define o caminho para as pastas que contêm os arquivos das rotas, controladores e modelos
define('ROUTE_PATH', __DIR__ . '/routes');
define('CONTROLLER_PATH', __DIR__ . '/controllers');
define('MODEL_PATH', __DIR__ . '/models');

// Inclui o arquivo do roteador
require_once __DIR__ . '/src/routes/router.php';

// Cria uma instância do roteador
$router = new Router();

// Define as rotas GET para as entidades Aluno, Escola e Matrícula
$router->get('/alunos', 'alunoController.php');
$router->get('/escolas', 'escolaController.php');
$router->get('/matriculas', 'matriculaController.php');

// Define as rotas POST para as entidades Aluno, Escola e Matrícula
$router->post('/alunos', 'alunoController.php');
$router->post('/escolas', 'escolaController.php');
$router->post('/matriculas', 'matriculaController.php');

// Define as rotas DELETE para a entidade Matrícula
$router->delete('/matriculas/{id}', 'matriculaController.php');

// Executa o roteador
$router->run();