<div class="titulo">Data #001</div>
<?php

echo time() . '<br>';
echo date('D, d \d\e \M \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

echo setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8' . '<br>');

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximasemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximasemana) . '<br>';

$datafixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $datafixa).'<br>';
