<?php

namespace Modelo;

class Pessoa {
    protected String $nome;
    protected Cpf $cpf;

    public function __construct(String $nome, Cpf $cpf) {
        $this->validaNome($nome);
        $this->cpf = $cpf;
    }

    public function recuperaNome(): String {
        return $this->nome;
    }

    public function recuperaCpf(): String {
        return $this->cpf->recuperaNumeroCpf();
    }

    protected function validaNome(String $nome): void {
        if (strlen($nome) < 5) {
            echo "O nome deve possuir mais que 5 caracteres." . PHP_EOL;
            exit();
        }
        $this->nome = $nome;
    }
}

?>