<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception
{

    public function __construct($message, $code = 0, $previous = null)
    {
        
        parent::__construct($message, $code, $previous);
    }
}


function calcularAposentadoria($idade)
{

    if ($idade < 18) {
        throw new FaixaEtariaException('Ainda esta fora do tempo para se aponsentar');
    }

    if ($idade > 70) {
        throw new FaixaEtariaException("Ja deveria estar aposentado");
    }

    return 70 - $idade;
}

$idadeavalidas = [15, 30, 50, 80];
foreach ($idadeavalidas as $idade) {
    try {
        $tempoRestante = calcularAposentadoria($idade);
        echo "Idade: $idade anos, faltam $tempoRestante anos restantes para sua aposentadoria<br>.";
    } catch (FaixaEtariaException $e) {

        echo "Não foi possivel calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}
