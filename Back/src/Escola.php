<?php
//Escola.php
namespace Escola;

class Escola
{
    public $matriculas = [];

    public function adicionaAluno(Matricula $matricula)
    {
        $this->matriculas[] = $matricula;
    }

    public function calcularNotas()
    {
        $notas = [];
        foreach ($this->matriculas as $matricula) {
            $notas[] = $matricula->getNota();
        }
        return $notas;
    }

    public function getAlunos()
    {
        $alunos = [];
        foreach ($this->matriculas as $matricula) {
            $alunos[] = $matricula->getAluno();
        }
        return $alunos;
    }    
    
    public function getAlunosAprovados()
    {
        $alunos = [];
        foreach ($this->matriculas as $matricula) {
            if ($matricula->getNota() >= 7) {
                $alunos[] = $matricula->getAluno();
            }
        }
        return $alunos;
    }

    public function getAlunosReprovados()
    {
        $alunos = [];
        foreach ($this->matriculas as $matricula) {
            if ($matricula->getNota() < 7) {
                $alunos[] = $matricula->getAluno();
            }
        }
        return $alunos;
    }
}