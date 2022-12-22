<div class="titulo">Desafio impressão</div>
<!--
Enunciado:
-Imprima apenas os valores do array que contém indice par
-Desafio adicional: Resolver com for e com foreach
-Valores esparados: AAA, CCC, EEE
-->
<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];
echo "<p><b>Apresentar os dados com o laço de repetição Foreach</b></p>";
foreach ($array as $chave => $valor) {
    
    if ($chave % 2 === 1) continue;
    echo "$chave >> $valor<br>";
}
echo "<hr>";
echo "<p>Apresentar os dados com o laço de repetição For</p>";

for($i = 0; $i < count($array); $i++){

    if($i % 2 !==0)continue;    
    echo "$i >> $array[$i]<br>";

}

