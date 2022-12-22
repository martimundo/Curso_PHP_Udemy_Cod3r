<div class="titulo">Argumentos Variaveis</div>
<?php

use Prophecy\Promise\ReturnArgumentPromise;

function soma($a, $b)
{

    return $a + $b;
}

echo soma(10, 5) . '<br>';
echo soma(6, 4, 3) . '<br>';

function somaCompleta(...$numeros)
{
    $soma = 0;

    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 6, 888, 100);


function membros($titular, ...$dependentes){

    echo "Titular: $titular<br>";

    if($dependentes){
        foreach ($dependentes as $depen) {
            echo "Dependentes: $depen<br>";
        }
    }

}
echo '<br>';
membros('Marcos', 'Adriana', 'Geraldo');

echo '<br>';
membros('Jão');