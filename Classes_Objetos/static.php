<div class="titulo">Membros Estaticos</div>

<?php

use A as GlobalA;

class A
{

    public $naoStatic = 'Variável de Instância';
    public static $static = 'Variável de Classe (estática)';

    public function mostrarA()
    {

        echo "Não Estático: {$this->naoStatic}<br>";
        //echo "Estatico: {$this->static}<br>";
        echo "Estático:" . self::$static . "<br>"; //para acessar propriedades estaticas usa-se o selfe::
    }

    public static function mostrarStatico()
    {
        echo "Estático: Acessado através de uma função estativa " . self::$static . "<br>"; //para acessar propriedades estaticas usa-se o selfe::
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStatico();
