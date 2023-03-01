<?php
//Matricula.php

namespace Escola;

use Escola\Aluno;

class Matricula
{
    private $aluno;
    private $idCurso;
    private $nota = 0;

    public function __construct(Aluno $aluno, $idCurso)
    {
        $this->aluno = $aluno;
        $this->idCurso = $idCurso;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function getAluno()
    {
        return $this->aluno;
    }
}