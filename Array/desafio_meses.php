<div class="titulo">Desafio Meses com PHP</div>
<?php

$meses = array(

    1 =>  "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
);
//como podemos acessar a posição correta do mês correspondente ao mês certo, visto que
//o indice do array não bate com o valor correspondente ao mês.

print_r($meses);
echo '<br>';
echo '<br>' . $meses[5];
