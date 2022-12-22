<div class="titulo">Desafio String em PHP</div>
<p>Enunciado</p>
<p>Avaliando os metodos da documentação da string, qual é o método que a posição do texto 'abc'
    na string 'AbcaBcabc retorne 1?'
</p>
<?php

$string = "Marcos Roberto Artimundo";

$tok =strtok($string, "\n\t");

while ($tok !== false){

    echo "Mundo=$tok<br/>";
    $tok = strtok("\n\t");
}
?>

<?php

$texto = "AbcaBcabc";
$parte ="abc";

$pos = strripos($texto, $parte);

if($pos === false){
    echo "nada foi encontrado, mas encontramos ($parte) em ($texto)";
}else{
    echo "Parabéns\n";
    echo "Nós Encontramos a última ($parte) em ($texto) na posição ($pos)<br><br>";
}

echo stripos("!AbcaBcabc", "abc");