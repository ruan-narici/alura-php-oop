<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa {
    private String $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, $salario)  {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string {
        return $this->cargo;
    }

    public function recuperaSalario(): float {
        return $this->salario;
    }

    public function alteraNome(string $nome): void {
        $this->validaNome($nome);
    }

    public function calculaBonificacao(): float {
        $bonificacao = 0.1;
        return $this->salario * $bonificacao;
    }
}

?>