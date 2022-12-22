<div class="titulo">Funções com PHP</div>
<?php

function imprimirMensagem(){

    echo "Ola Muundoooo!!!";
    echo "Até a proxima!!!<br>";
}
echo imprimirMensagem();


$varivel = 1;

function trocarValor(){

    $varivel = 2;
    echo "Durante a função: $varivel<br>";
}

echo "Antes: $varivel<br>";
trocarValor();
echo "Antes: $varivel<br>";

function trocarValorDeVerdade(){

    global $varivel;
    $varivel = 3;
    echo "Durante a Função: $varivel<br>";
}
echo "Antes: $varivel<br>";
trocarValorDeVerdade();
echo "Depois: $varivel<br>";


