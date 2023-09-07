<?php

function a(): int {
    try {
        echo "Programa iniciado";
        // throw new Exception();
        return 0;
    } catch (Exception $e) {
        echo "Erro#";
        return 1;
    } finally {
        echo "Final do codigo#";
    }
}

echo a();

?>