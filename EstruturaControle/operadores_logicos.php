<div class="titulo">Operadores Logicos em PHP</div>
<?php
echo "<p class='divisao'>V ou F</p><hr>";

var_dump(true);
echo '<br>';
var_dump(!!true);//not

echo '<p class="divisao"> Tabela Verdade "AND" (E)</p><hr>';

var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && true);

var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND true);

echo '<p class="divisao">Tabela Verdade "OR" (OU)</p><hr>';
var_dump(true || false);
var_dump(false || true);
var_dump(false || true);
var_dump(false || false);


var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR true);
var_dump(false OR false);

echo '<p class="divisao">Tabela Verdade "XOR" (OU Exclusivo)</p><hr>';
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<p class="divisao">Exemplo de Operações Lógicas</p><hr>';
$idade = 63;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioHomem = ($idade >=62 && $sexo ==='M');
$criterioMulher = ($idade >= 65 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 65 && $sexo === 'F'){

    echo "Apta para se aposentar->$sexo";

}elseif($idade >=62 && $sexo ==='M'){

    echo  "Apto para se aposentar ->$sexo";

}else{

    echo "Ainda não atingiu a aidade para receber o benefício!!!"; 
}
?>



