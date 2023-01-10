<div class="titulo">TRY e CACHT</div>
<?php

//O try catch é utilizado para tratar erros dentro de qualquer aplicação.

try {
    //echo intdiv(7, 0);
} catch (Error $e) {

    echo "Tivemos uma falha aqui...<br>{$e}";
}

try {
    throw new Exception("Algo deu errado por aqui");
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {

    echo "<strong>divisão por zero</strong><br>";
} catch (Throwable $e) {

    echo 'Erro encontrado: ' . $e->getMessage() .'<br>';
}finally{
    echo "Sempre executado";
}
