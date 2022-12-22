<div class="titulo">Tipos Básicos de Variáveis</div>
<p>Nesse módulo será abordados os conceitos sobre as variáveis dentro da linguagem PHP!.
   As variaveis em PHP são representadas por um cifrão ($) seguido pelon nome da variáve. As variáveis, são
   case-sentive, ou seja, distingue maiuscula de minuscula.

</p>
<a href="https://www.php.net/manual/pt_BR/language.variables.php" target="_blank"><p>Conceitos sobre Variáveis em PHP</p></a>

<?php
$numeroA = 13;

echo $numeroA;
echo'<br>';
var_dump($numeroA);
echo'<br>';

$valorA = 10;
$valorB  =10;
$soma = $valorA + $valorB;
echo $soma;
echo'<br>';
unset($soma);
echo'<br>';
echo !isset($soma);
echo'<br>';

echo $_SERVER["HTTP_HOST"];
