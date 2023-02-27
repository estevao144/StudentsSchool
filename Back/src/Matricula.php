<?php

class Matricula
{
    private $alunos = array();
    private $idMatricula = 0;

    public function adicionarAluno($aluno)
    {
        $this->alunos[] = $aluno;
        $this->idMatricula++;
    }


}
