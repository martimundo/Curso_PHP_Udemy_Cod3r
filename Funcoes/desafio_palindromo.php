<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($dados)
{

    if (strrev($dados) == $dados) {

        return "Sim";
    } else {
        return "Não é Palindromo";
    }
}

//Teste

/*$principal = "MArcos";
if (palindromo(($principal))) {
    echo "Sim é palindromo<br>";
} else {

    echo "{$principal}>Não é Palindromo";
}
*/

function palindromoFor($palavra)
{

    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {

        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){

            return "Não é Palindromo";
        }
    }
    return "Sim é Palindromo";
}

echo palindromoFor('Marcos'). '<br>';

echo "<hr>";
function palindromot($palavra){

    if(strrev($palavra) == $palavra){

        return "Sim é Palindromo";

    }else{

        return"Não Palindromo";
    }

}
echo palindromot('MArcos') . '<br>';
