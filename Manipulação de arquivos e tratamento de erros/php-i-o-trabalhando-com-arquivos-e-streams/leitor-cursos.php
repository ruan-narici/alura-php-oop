<?php

// $arquivo = fopen('lista-cursos.txt', 'r');

// while (!feof($arquivo)) {
//     $linha = fgets($arquivo);
//     echo $linha . PHP_EOL;
// }

// fclose($arquivo);

$arquivo = file_get_contents( __DIR__ . "\listaCursos.txt");
echo $arquivo;

?>