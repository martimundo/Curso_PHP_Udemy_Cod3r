<div class="titulo">Closure e Callable</div>
<?php

//closure
$soma1 = function($a, $b){
    
    return $a + $b;
};

//callable
function soma2($a, $b){

    return $a + $b;

}

echo $soma1(1, 2).' ';
echo (is_callable($soma1) ? 'Sim' : 'Não').'<br>';

echo soma2(2,3).' ';
echo (is_callable(soma2(2,3)) ? 'Sim' : 'Não').'<br>';

function executar($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";

}
executar(2, 3, '+', $soma1);
executar(2, 3, '+', soma2(2,3));