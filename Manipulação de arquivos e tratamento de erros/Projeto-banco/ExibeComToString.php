<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$umFuncionario = new Desenvolvedor('Ruan Narici', new Cpf('000.111.222-33'), 10000);

echo $umFuncionario;

?>