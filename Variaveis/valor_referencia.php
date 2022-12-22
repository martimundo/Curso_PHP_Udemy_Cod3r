<div class="titulo"> Valor vs Referência</div>
<?php

$variavel = 'Valor inicial da Varial';
echo $variavel;
echo '<br>';

$variavelValor = $variavel;
echo $variavelValor;
$variavelValor = 'Novo valor da variavelValor';
echo '<br>';
echo "<br>$variavelValor";
echo "<br>$variavel";

//atribuição por referência
$variavelreferencia = &$variavel;
$variavelreferencia = 'mesma Referência';

echo "<br>$variavel $variavelreferencia";
