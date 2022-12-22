<div class="titulo">Laço de Repetição com Foreach</div>
<?php

$array = [
    1 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];

foreach ($array as $dias) {

    echo "<strong>$dias</strong><br>";
}
echo "<hr>";

foreach ($array as $indice => $dias) {
    echo "<strong>$indice</strong> >> $dias<br>";
}

$matrix = [

    ['A', 'E', 'I', 'O', 'U',],
    ['B', 'C', 'D', 'E','F']


];

foreach ($matrix as $linha){

    foreach($linha as $valor){
        echo "$valor ";
    }
    echo "<br>";
}
echo "<hr>";

$numeros=[1,2,3,4,5,6];

foreach($numeros as &$dobrar){

    $dobrar *= 2;
    echo "$dobrar<br>";   

}
print_r($numeros);