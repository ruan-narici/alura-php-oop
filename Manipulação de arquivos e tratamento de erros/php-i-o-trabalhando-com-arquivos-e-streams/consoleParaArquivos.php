<?php

//$novoCurso = trim(fgets(STDIN));

// file_put_contents(__DIR__ . '/cursosPhp.txt', "\n$novoCurso", FILE_APPEND);

// Abrindo arquivo no modo leitura
$arquivo = fopen(__DIR__ . '/cursosPhp.txt', 'r');

// Fazendo uma especie de echo com o fwrite e o STDOUT
fwrite(STDOUT, "LISTA DE CURSOS: \n");

// Copiando os stream do arquivo e jogando no console atraves do STDOUT
stream_copy_to_stream($arquivo, STDOUT);

?>