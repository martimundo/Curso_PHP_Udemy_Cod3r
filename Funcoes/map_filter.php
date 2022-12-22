<div class="titulo">MAP e FILTER</div>
<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota){
    $notasFinais [] = round($nota);
}
print_r($notasFinais);

echo '<br>';
/*$notasFinais2 = array_map($nota);
print_r($notasFinais2);*/


$apenasAprovados=[];
foreach($notas as $nota){
    if($nota >=7){
        $apenasAprovados[] = $notas;
    }
}
echo '<br>';
print_r($apenasAprovados);