<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador {

    public function autentica(Diretor $diretor, string $senha): void {
        if ($diretor->autentica($senha)) {
            echo "Acesso liberado." . PHP_EOL;
            return;
        }

        echo "Acesso negado." . PHP_EOL;
    }
}

?>