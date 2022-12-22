<div class="titulo">Atribuições em PHP</div>
<?php

$titlte = "Atribuições";
$numeric = 10;
echo'<br>'. $numeric;
$numeric= $numeric - 3;
echo'<br>' . $numeric;

$numeric = $numeric + 1.5;
echo '<br>'.$numeric;

//Atribuições de Decremento onde, as atribuições são realizadas antes como pré-decrement e pós drecremento.
$numeric--;
--$numeric;
echo '<br>'.$numeric;
//Atribuições de Incremento onde, as atribuições são realizadas antes como pré-decrement e pós drecremento.
$numeric++;
++$numeric;
echo '<br>'.$numeric;

//Atribuições de Incremento e Decremento utilizando += e -=...
echo'<p>Atribuições de Incremento e Decremento utilizando += e -=...</p>';
$numeric += 10;
echo '<br>'.$numeric;

$numeric -=5;
echo '<br>'.$numeric;

$numeric *=10;
echo '<br>'.$numeric;

$numeric /=2;
echo '<br>'.$numeric;

$numeric %= 5;
echo '<br>'.$numeric;

$numeric **=6;
echo '<br>'.$numeric;

$numeric .=4;//para esse caso o valor 4 é concatenado com o resultado final.
echo '<br>'.$numeric;
echo'<p>Atribuições e Concatenações entre Variáveis...</p>';
$texto = 'Sou um texto';
echo '<br>'.$texto;
$texto = $texto . 'outra parte do texto!!!';
echo'<br>'.$texto;
$texto = $texto . "Mais um texto qualquer";
echo '<br>' . $texto;

echo'<p>Valores Inexistentes. Utilizamos  dois pontos de interrogação ?? para atribuir um valor padrão...</p>';
$varialInexistente = "Texto Que existe";
$valor = $varialInexistente ?? 'Valor Padrão';
echo'<br>'.$valor;




