<div class="titulo">Recursividade</div>
<?php

function somaUmAte($numero)
{
    $soma = 0;

    for (; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';


function somaRecurvisaUmAte($numero){
    //Condição de parada
    if($numero === 1){
        return 1;
    }

    return $numero + somaRecurvisaUmAte($numero- 1);
}

echo somaRecurvisaUmAte(150);