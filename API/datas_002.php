<div class="titulo">Datas_002</div>
<?php

$formatoData1 = 'D, \d\e M \d\e Y';
$formatoData2 = '%A %d de %B de %Y';
$formatoDataHora ='%A %d de %B de %Y - %H:M%:%S';

$agora = new DateTime();

print_r($agora);
echo'<br>';

echo $agora->format($formatoData1).'<br>';

setlocale(LC_TIME,'pt_BR', 'pt_BR.utf-8');
echo strftime($formatoData2, $agora->getTimestamp()).'<br>';

$amanha = new DateTime('+2 day');
echo strftime($formatoData2, $amanha->getTimestamp()).'<br>';

$amanha->modify('+5 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()).'<br>';

$amanha->setDate(2000, 5, 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()).'<br>';

//calculos com datas.
$dataPassada =new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-07-25');
$outraData = new DateTime('2030-07-25');

//retorna verdadeiro ou falso
echo ($amanha > $dataPassada ? 'Maior' : 'Menor').'<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor').'<br>';
echo ($amanha < $dataPassada ? 'Maior' : 'Menor').'<br>';
echo $outraData == $dataFutura ? 'Sim' : 'Não';//comparação de valores e não de objeto criado em memoria, para isso utilizamos ===

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now',$tz);
echo $agora->format('d/M/y H:i:s');