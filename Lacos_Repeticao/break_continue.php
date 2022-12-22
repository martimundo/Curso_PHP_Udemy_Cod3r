<div class="titulo">Break & Continue Com PHP</div>
<?php

$cont = 10;

for (;;) {

    echo "$cont<br>";
    $cont++;

    if ($cont > 20) {
        break;
    }
}
echo "FIM!";
echo "<hr>";

for (;;) {
    
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont<br>";
    if ($cont >= 30) {
        break;
    }
}

echo "<hr>";
foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor % 2 ===0) continue;

    echo "$valor<br>";

}
echo "FIM!";
