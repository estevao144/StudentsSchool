<?php

class Escola
{
    private int $matricula;
    private string $nome;
    private string $sobrenome;
    private int $cpf;
    

public function __contruct(int $matricula, string $nome, string $sobrenome, int $cpf) {
    $this->matricula = $matricula;
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->cpf = $cpf; 
}
}
