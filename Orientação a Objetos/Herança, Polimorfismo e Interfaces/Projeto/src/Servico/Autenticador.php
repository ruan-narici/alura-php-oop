<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador {

    public function autentica(Autenticavel $autenticavel, string $senha): void {
        if ($autenticavel->autentica($senha)) {
            echo "Acesso liberado." . PHP_EOL;
            return;
        }

        echo "Acesso negado." . PHP_EOL;
    }
}

?>