<?php

// Abrindo arquivo
$arquivo = fopen(__DIR__ . '\listaCursos.txt', 'r');

// Filtrando e transformando para UPPERCASE com o filter 'string.toupper' do PHP
stream_filter_append($arquivo, 'string.toupper');

// EXIBINDO TODOS OS CARACTERES DO ARQUIVO
echo fread($arquivo, filesize(__DIR__ . '\listaCursos.txt'));

?>