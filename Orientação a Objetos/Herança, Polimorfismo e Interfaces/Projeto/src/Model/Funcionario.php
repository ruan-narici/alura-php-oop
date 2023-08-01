<?php

class Funcionario extends Pessoa {
    private String $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)  {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;

    }

    public function recuperaCargo(): string {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void {
        $this->validaNome($nome);
    }
}

?>