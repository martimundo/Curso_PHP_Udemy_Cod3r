<div class="titulo">Usando Tipos </div>
<?php


function somar($a, $b){
     echo "<span>Somando $a + $b = </span>";
     return $a + $b;
}

echo somar(1, 2).'<br>';

echo somar(1.7, 2.5);
echo "<hr>";

function somar2(int $a, int $b){

    echo "<span>Somando $a + $b =</span>";
    return $a + $b;

}

echo somar2(2, 2).'<br>';
echo somar2(1, '5');

//Nessa função o retorno dela sera Inteiro...
function somar3($a, $b): int{
    
    echo "<spam>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(2, 2).'<br>';
echo somar3(1, '5');
