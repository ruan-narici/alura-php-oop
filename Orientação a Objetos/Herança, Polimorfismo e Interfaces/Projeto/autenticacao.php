<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Servico\Autenticador;

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Ruan Narici', 
    new Cpf('000.111.222-33'), 
    10000
);

$gerente = new Gerente(
    'Cinthia Oliveira',
    new Cpf('999.888.777-66'),
    20000
);

$autenticador->autentica($diretor, '1234');
$autenticador->autentica($gerente, 'abc');

?>