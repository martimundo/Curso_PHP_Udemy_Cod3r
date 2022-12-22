<div class="titulo">Interpolar Com PHP</div>

<?php

$numero = 10;

echo $numero;
echo'<br> $numero';
echo "<br> $numero";

$texto = "A nota do aluno é: $numero";
echo"<br>$texto";

$objeto = 'Lápis';
echo '<br>Eu tenho 5 $objeto;';
echo "<br>Eu tenho 5 $objeto;";
echo "<br>Eu tenho 5 $objetos;";
echo "<br>Eu tenho 5 {$objeto}s;";
echo "<br>Eu tinha 5 { $objeto} mais perdi 2 {$objeto };";
echo "<br>Eu tinha 5 {$objeto} mais perdi 2 {$objeto };";