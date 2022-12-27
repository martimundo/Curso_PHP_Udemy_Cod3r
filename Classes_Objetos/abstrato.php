<div class="titulo">Classe Abstrata</div>
<ul>
    <li>Classes Abstratas são criadas como abstract</li>
    <li>Classes Abstratas não podem ser instanciadas;</li>
    <li>A caracteristica de métodos abstratos é de não ter implementação de códigos em seu corpo;</li>
</ul>

<?php

abstract class Abstrata
{

    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata
{

    public function metodo1()
    {
        echo "executando método <br>";
    }

    abstract public function metodo3();
}

//Nessa classe todos os metods precisam ser implementados.
class Concreta extends FilhaAbstrata
{

    public function metodo1()
    {
        echo "EXECUTANDO METODO 1 EXTENDIDO<BR>";
        parent::metodo1();
    }

    protected function metodo2($parametro){
        echo "Executando Método 2 {$parametro}<br>";
        
    }

    public function metodo3(){
        echo "Executando Método 3<br>";
        $this->metodo2('Interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

