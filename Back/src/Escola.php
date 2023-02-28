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

    public function getAll()
    {
        return $this->matriculas;
    }
}