<?php
//Aluno.php
namespace Escola;

class Aluno
{
    private $id;
    private $nome;
    private $cpf;

    public function __construct($nome, $cpf, $id = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}
