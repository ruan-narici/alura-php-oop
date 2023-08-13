<?php

$arquivo = fopen(__DIR__ . "/escritorCursos.txt", "w");

$curso = "PHP I/O: trabalhando com arquivos e streams";

fwrite($arquivo, $curso);

fclose($arquivo);

?>