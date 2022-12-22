<div class="titulo">Operações entre Arrays</div>
<?php

$dados1 = [

    "nome"=>"Marcos",
    "idade"=>39
];

$dados2 = [

    "naturalidade"=>"São Paulo"
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>'.is_array($dadosCompletos);
//para saber a qunaidade de dados em um array
echo '<br>'.count($dadosCompletos);

//para criar um array de forma randomica

echo'<br>';

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

//para remover um item do array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);
echo '<br>';
$impares = [1,3,5,7,9];
$pares = [2,4,6,8];

$decimais = $pares + $impares;
print_r($decimais);

echo '<br>';
//o array_merge fara a junção dos dois arrays...
$decimais = array_merge($pares, $decimais);
print_r($decimais);

echo '<br>';
sort($decimais);
print_r($decimais);