<div class="titulo">Funções Anônimas</div>
<?php

echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper(($match[1]));
}, 'helo-word<br>');



$soma = function ($a, $b) {
    return $a + $b;
};
echo "Nesse caso estamos fazendo a soma com uma função anônima...{$soma(10, 50)}<br>";

function executar($num1, $num2, $op, $funcao)
{

    $resultado = $funcao($num1, $num2);
    echo "$num1 $op $num2 = $resultado <br>";
}

executar(2, 3, '+', $soma);
echo "<hr>";

$multiplicacao = function ($num1, $num2) {
    return $num1 * $num2;
};
executar(10, 10, '*', $multiplicacao);
echo "<hr>";

$subtracao = function ($num1, $num2) {
    return $num1 - $num2;
};
executar(50, 25, '-', $subtracao);
echo "<hr>";

$divisao = function ($num1, $num2) {
    return $num1 / $num2;
};
echo "Divisão<br>";
executar(9, 3, '/', $divisao);
echo "<hr>";

function restodivisao($num1, $num2)
{
    return $num1 % $num2;
}

executar(9, 3, 'mod', restodivisao);
