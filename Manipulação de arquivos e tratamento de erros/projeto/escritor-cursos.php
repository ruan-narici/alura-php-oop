<?php

// $arquivo = fopen(__DIR__ . "/escritorCursos.txt", "w");

// $curso = "PHP I/O: trabalhando com arquivos e streams";

// fwrite($arquivo, $curso);

// fclose($arquivo);


$curso2 = PHP_EOL . "PHP Exceptions: tratamento de erros";

file_put_contents(__DIR__ . "/escritorCursos.txt", $curso2, FILE_APPEND);

?>