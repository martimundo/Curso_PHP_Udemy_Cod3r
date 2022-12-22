<div class="titulo">Mapa com Array</div>
<?php

$dados = array(

    "idade" =>25,
    "nome" =>"Marcos",
    "Profissao" =>"Desenv. WEB"
);
print_r($dados);

//forma correta para se pegar o valor dentro do array mapa.

echo '<br>'.$dados["idade"];
echo '<br>'.$dados["nome"];
echo '<br>'.$dados["Profissao"];

//Lista que devemos evitar de criar com arrays
$lista = array(
    "c",
    "Orelha"=>10,
    "d",
    9 =>"d",
    
);
echo "<br>";
print_r($lista);

//para adicionar um item a um array..
$lista[] = "i";
echo '<br>';
print_r($lista);
echo '<br>';


//outra forma de adicionar um item a aum array
$lista['vitrine']='j';
print_r($lista);