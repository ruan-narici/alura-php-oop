<?php

$novoCurso = trim(fgets(STDIN));

file_put_contents(__DIR__ . '/cursosPhp.txt', "\n$novoCurso", FILE_APPEND);

?>