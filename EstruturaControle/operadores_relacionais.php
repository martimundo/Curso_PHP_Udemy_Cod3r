<div class="titulo">Operadores Relacionais</div>
<p>Operadores de comparação, como os seus nomes implicam, permitem que você compare dois valores. Você pode se interessar em ver as tabelas de comparação de tipos,
    que tem exemplo das várias comparações entre tipos relacionadas.

</p>
<p>
    Se comparar um número com uma string ou com strings numéricas, cada string é convertido para um número e então a comparação é realizada numericamente. Essas regras também se aplicam a instrução switch. As conversões de tipo não são realizadas
    quando a comparação utilizada é === ou !== por esse tipo de comparação envolver valores e tipos.
</p>

<?php

var_dump(1 == 1); //igualdade
var_dump(1 > 1); //maior que
var_dump(1 >= 1); //maior igual que
var_dump(1 < 1); //menor que
var_dump(1 <= 1); //Meno igual que
var_dump(1 <> 1); //diferente que
var_dump(1 != 1); //diferente que

echo "<p>Relacionais com IF/Else</p><hr noshade=”noshade”>";
$idade = 64;
if ($idade < 18) {

    echo "Menor de Idade<br>";
} else if ($idade < 65) {
    echo "Adulto<br>";
} else {
    echo "Terceira Idade";
}
?>
<?php


echo '<p>Spaceship</p><hr noshade=”noshade” >';
var_dump(500 <=>3);
var_dump(500 <=>500);
var_dump(50 <=>500);


?>

<style>
p{
    margin-bottom: 0px;
}
hr{
    margin-top: 0px;    
	border-width: 0; 
	height: 1px;
	border-top-width: 1px;
    
    
}

</style>
