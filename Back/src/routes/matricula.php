<?php
$router->get('/matriculas', 'get_matriculas.php');
$router->get('/matriculas/{id}', 'get_matricula.php');
$router->post('/matriculas', 'create_matricula.php');
$router->delete('/matriculas/{id}', 'delete_matricula.php');