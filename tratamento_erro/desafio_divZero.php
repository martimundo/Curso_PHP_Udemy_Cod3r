<div class="titulo">Desafio Execeção</div>
<h4>Enunciado</h4>
<p>Metodo intdiv para ser sobrescrito</p>
<ul>
    <li>Lançar uma execeção quando tentar dividir por zero</li>
    <li>Lançar uma execeção quando o resultado não for inteiro</li>
    <li>Dividr normalmente nos demais casos</li>
</ul>
<p>Os Teste...</p>
<ul>
    <li>intdiv com parametros 8 e 2 [Sucesso]</li>
    <li>intidiv com os parametros 8 e3 [Exceção]</li>
    <li>intidiv com os parametros 8 e 0 [Execeção]</li>
    <li>intdiv "Original" com os parametros 8 e 3 [Sucesso]</li>
</ul>

<?php

require_once 'desafio_intdiv.php';

use function \Artimetica\intdiv;

try {
    echo intdiv(8, 3);
} catch (\Artimetica\NaoInteiroException $e) {

    echo "Resultado não é um Inteiro<br>";
}

try {
    echo intdiv(8, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 4);
