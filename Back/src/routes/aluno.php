<?php

$router->get('/alunos', 'alunoController.php');
$router->get('/alunos/{id}');
$router->post('/alunos');
$router->delete('/alunos/{id}');