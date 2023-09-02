<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa {

    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)  {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaSalario(): float {
        return $this->salario;
    }

    public function alteraNome(string $nome): void {
        $this->validaNome($nome);
    }

    public abstract function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function __toString(): string {
        return "{$this->nome}, {$this->cpf->recuperaNumeroCpf()}, {$this->salario}";
    }
}
