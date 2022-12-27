<div class="titulo">Desafio 7 Erros</div>
<?php

interface Template
{

    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{

    public function metodo3()
    {
        echo "estou Funcionando<br>";
    }
    public function metodo1()
    {
    }

    public function metodo2($parametro)
    {
    }
}

class Classe extends ClasseAbstrata
{

    function __construct($parametro)
    {
    }

    public function metodo2($parametro)
    {
        echo "Metodo executado com sucesso<br>";
    }
}

$exemplo = new Classe('Nome');
$exemplo->metodo3();
$exemplo->metodo2('Teste');

echo "Fim do Desafio";
