<div class="titulo">Laços de Repetição com Estrutura For</div>

<?php
//O laço for é determinado para controlar uma quantidade de repetições.

//laço com o contador iniciado
for ($cont = 1; $cont <= 5; $cont++) {

    echo "$cont <br>";
}
echo "<hr>";
//laço for sem o Contador Iniciado
for (; $cont <= 10; $cont++) {
    echo "$cont<br>";
}
echo "<hr>";
for (; $cont <= 20;) {
    echo "$cont <br>";
    $cont++;
}
echo "<hr>";

$array = [
    1 => "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];

print_r($array);

echo "<hr>";
echo '<br>';

for ($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]}<br>";
}
echo "<hr>";
$matrix = [

    ['A', 'E', 'I', 'O', 'U',],
    ['B', 'C', 'D', 'E','F']


];
for($i = 0; $i < count($matrix); $i++){

    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} ";

    }
    echo "<br>";
}