<div class="titulo">While/Do While</div>
<?php

const VALOR_LIMITE = 5;

$contador = 0;

while ($contador <= VALOR_LIMITE) {
    echo "while $contador<br>";
    $contador++;
}
//mesmo exemplo com o um FOR
echo "<hr>";

for ($contador = 0; $contador < VALOR_LIMITE;) {
    echo "Laço For: $contador <br>";
    $contador++;
}

$contador = 0;
do {
    echo "do-while $contador<br>";
    $contador++;
    $contador;
} while ($contador < VALOR_LIMITE);

$contador = 0;
while(true)
{
    echo "While(true) $contador<br>";
    $contador++;

    if($contador >= VALOR_LIMITE) break;
}
