<div class="titulo">Classe Final</div>
<p>A palavra-chave final, previne que classes filhas sobrescrevam uma definição prefixada com final.
    Se a própria classe estiver definida como final, ela <strong>Não pode ser estendida.</strong><br>
    Mesmo sendo uma classe definada como final, ela não pode ser herdada mas pode ser instanciada.
    <a href="https://www.php.net/manual/pt_BR/language.oop5.final.php" target="blank">saber mais...</a>
</p>

<?php

use Classe as GlobalClasse;

abstract class Abstrata{

    abstract public function metodo1();

    //por utilizara a palavra chave final, esse medoto não pode ser modificado
    public final function metodo2(){
        echo "Sou uma classe final, por isso não posso ser mudificado<br>";
    }
}

class Classes extends Abstrata{

    public function metodo1()
    {
        echo "Executando Método 1 herdado da classe Abstrata<br>";
    }

    /*
    esse método não pode ser sobrescrito por um metodo final da classe pai.
    public function metodo2()
    {
        # code...
    }
    */
   
}

$classes = new Classes();
$classes->metodo1();
$classes->metodo2();
echo "Fim do Programa";




