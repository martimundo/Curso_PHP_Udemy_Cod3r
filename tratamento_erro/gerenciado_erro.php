<div class="titulo">Gerenciador Erro Hendler</div>
<?php

ini_set('display_errors', 1);
//echo 4 / 0 .'<br>';

//Mostra erros distintos
error_reporting(E_ERROR);
//echo 4/0 . '<br>';

//Mostrará todos os erros que antes foram desativados
error_reporting(E_ALL);
//echo 4/0 . '<br>';

//Fara a negação dos erros utilizando o sinal de ~. 
//Semelhante ao E_ERROR...Signifa negação de todos os erros.
error_reporting(~E_ALL);
echo 4/0 . '<br>';

error_reporting(E_ALL);
echo 7 / 0 .'<br>';
include 'arquivo.php';


echo "<hr>";
function filtrarMensagem($errno, $errstring){
    
    //$text = 'include';
    $text = 'by zero';

    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);
echo '<hr>';
echo 4 / 0;
include 'arquivos.php';

echo '<hr>';
restore_error_handler();
echo 7 / 0;
include 'text.php';