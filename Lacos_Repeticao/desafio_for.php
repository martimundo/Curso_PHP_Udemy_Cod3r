<div class="titulo">Desafio Laço For com PHP</div>
<!-- 
Ao realizar o laço FOR a saida do algoritmo precisa sair conforme abaixo:    
#
##
###
####
#####
1) Pode usar um incremento $i++
2) Não Pode usar incremento;
-->
<?php

$array=[


    "#",
    "##",
    "###",
    "####",
    "#####",
];
for($impressao2 = '#';$impressao2 !== '######'; $impressao2 .= '#' ){
    echo "$impressao2<br>";
}
echo "<hr>";
$impressao ='';

for($count = 1; $count <=5; $count ++){

    $impressao .= '#';
    echo "$impressao<br>";
}
