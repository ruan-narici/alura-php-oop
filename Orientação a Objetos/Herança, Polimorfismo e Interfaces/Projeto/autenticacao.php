<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Ruan Narici', 
    new Cpf('000.111.222-33'), 
    10000
);

$autenticador->autentica($diretor, '1234');

?>