<div class="titulo">Traits</div>
<p>Traits são um mecanismo para reutilização de código em 
    linguagens de herança única, como PHP. 
    Um Trait destina-se a reduzir algumas limitações de herança única, 
    permitindo que um desenvolvedor reutilize conjuntos de métodos livremente em várias classes independentes vivendo em 
    diferentes hierarquias de classes. A semântica da combinação de Traits e classes é definida de forma a reduzir a complexidade e 
    evitar os problemas típicos associados à herança múltipla e Mixins. Para usar uma traits, usamos a palavra use</p>
    <p><a href="https://www.php.net/manual/pt_BR/language.oop5.traits.php"target="blanck">Saber mais...</a></p>
    <?php


trait Validacao{

    public $a = "VALOR DE A";

    public function validarString($string)
    {
        return isset($string) && $string !== '';
    }
}

trait ValidacaoMelhor{

    public $b = "VALOR DE B"; 
    private $c = "VALOR DE C (PRIVADO)";

    public function validarStringMelhor($string){

        return isset($string) && trim($string);

    }
    public function imprimirValorC(){
        echo $this->c;
    }
}

class Usuarios{
    //usando uma trait

    use Validacao, ValidacaoMelhor;
}

$usuario = new Usuarios();

var_dump($usuario->validarString(' '));
echo "<br>";

var_dump($usuario->validarStringMelhor(' '));
echo "<br>";
echo $usuario->a."<br>". $usuario->b; 
echo "<br>";
$usuario->imprimirValorC();