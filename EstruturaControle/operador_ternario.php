<div class="titulo">Operador Ternário!</div>

<?php


$idade = 70;

$status;

if ($idade >= 18) {
    $status = "Maior de idade!";
} else {
    $status = "Menor de Idade!";
}

echo "<p>$status<br></p>";

$idade = 25;
$status = $idade >=18 ? 'Maior de Idade' : 'Menor de Idade ';

echo "<p>$status<br></p>";