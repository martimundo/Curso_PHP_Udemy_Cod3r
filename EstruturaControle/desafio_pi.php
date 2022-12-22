<div class="titulo">Desafio Exercicio PI</div>
<?php


echo pi();
$pi = 3.14;
$piErrado = 2.8;

if($pi - pi() < 0.01){

    echo '<br>São Praticamente iguais';
}
if($pi - $piErrado <= 0.01 ){
    echo '<br>São Praticamente iguais';
}
else{
    echo '<br>Valor errado';
}