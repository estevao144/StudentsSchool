<?php

namespace Escola;

class Estudante 
{
    
    private int $matricula;
    private string $nome;
    private string $sobrenome;
    private int $cpf;
    

public function __contruct(int $matricula, string $nome, string $sobrenome, int $cpf, string $email) {
    $this->matricula = $matricula;
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->cpf = $cpf;
    $this->email = $email;
}

public function setMatricula(int $matricula) {
    $this->matricula = $matricula;
}

public function getNome(): string {
    return $this->nome;
}

public function setNome(string $nome) {
    $this->nome = $nome;
}

public function getSobrenome(): string {
    return $this->sobrenome;
}

public function setSobrenome(string $sobrenome) {
    $this->sobrenome = $sobrenome;
}

public function getIdade(): int {
    return $this->idade;
}

public function setIdade(int $idade) {
    $this->idade = $idade;
}   

public function getCpf(): int {
    return $this->cpf;
}   

public function setCpf(int $cpf) {
    $this->cpf = $cpf;
}      

}
