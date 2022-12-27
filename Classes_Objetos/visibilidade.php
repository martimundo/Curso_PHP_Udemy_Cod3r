<div class="titulo">Visibilidade com PHP</div>
<!-Nesse Módulo sera abordade os modificadores de acesso->
<?php
//Existem 3 tipos de visibilidades em PHP sendo eles:
//public, protected e private.
/**
 * Somente a própria classe pode acessar propriedades privadas.
 */

class A{


    public $publico = "Publico";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA(){

        echo "Class A: {$this->publico} <br>";
        echo "Class A: {$this->protegido}<br>";
        echo "Class A: {$this->privado}<br>"; 
        $this->naoMostrar();
    }

    protected function vaiPorHeranca(){
        echo "Sou tarnsmitido por Herança";
    }

    private function naoMostrar(){
        echo "Não aparece nada pq a Função é Provida. Só pode ser acessada através de outra função dentro da classe.<br>";
    }

}
$ver = new A;
$ver->mostrarA();
//*********************************************************************************************************************

class B extends A{

    public function mostrarB(){

        echo "Classe B: {$this->publico}<br>";
        echo "Classe B: {$this->protegido}<br>";
        echo "Classe B: {$this->privado}<br>";//por ser privado, mesmo utilizando herança não é possível acessar a propriedade privadas

        parent::vaiPorHeranca();
    }
}

$b = new B();
$b->mostrarB();
