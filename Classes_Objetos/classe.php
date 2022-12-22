<div class="titulo">Classe em PHP</div>
<h4>Definição de Classe</h4>
<p>Uma classe trata-se de uma estrutura ou esqueleto que abstraimos de um conjunto de objetos contendo características parecidas.
    A classe define o comportamento de seus objetos usando métodos e modificando seus estados como os atributos.</p>
<?php

class Cliente
{
    //atributos
    public $nome = "Anonimo";
    public $idade  = 18;


    //No Php as funções são os métodos de uma classe.
    public function apresentar()
    {

        echo "Nome: {$this->nome} tem {$this->idade} anos de idade.<br>";
    }
}

//instânciando uma classe 
$cliente1 = new Cliente();
$cliente1->nome = "Marcos R Artimundo";
$cliente1->idade = 40;
$cliente1->apresentar();

$cliente2 = new Cliente();
$cliente2->nome = "Adriana C. Rodrigues D'Amico";
$cliente2->idade = 46;
$cliente2->apresentar();
