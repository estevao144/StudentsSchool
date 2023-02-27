<?php

require 'vendor/autoload.php';

use Escola\Estudante;
use Escola\Matricula;
use Escola\Escola;


$matricula = new Matricula();
$aluno1 = new Estudante(1, 'João', 'Silva', 123456789,);

$matricula->adicionarAluno($aluno1);

$aluno2 = new Estudante(2, 'Maria', 'Silva', 987654321,);

$matricula->adicionarAluno($aluno2);

echo $aluno1->getNome(); // João
echo $aluno2->getNome(); // Maria