<div class="titulo">Metodos Mágicos</div>
<P>
Métodos mágicos são métodos especiais que sobrescrever o comportamento padrão do PHP quando certas operações são realizadas em um objeto.
<a href="https://www.php.net/manual/pt_BR/language.oop5.magic.php" target="blanck">Saber mais...</a>
</P>
<?php

class Humano{

    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo "Construtor Chamado com sucesso<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "Fechou";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){

        echo $this . '<br>';
    }

    public function __get($attrib){

        echo "Lendo atributo não declarado: {$attrib}<br>";
        
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar método {$metodo}";
        echo ', com parametros: ';
        print_r($params);
    }

}

$pessoa = new Humano('Marcos', 40);
$pessoa->apresentar();
echo $pessoa, '<br>';
$pessoa->nome = 'Adriana<br>';
$pessoa->idade = 46;
$pessoa->apresentar();
//var_dump($pessoa->nomeCompleto);
$pessoa->nomeCompleto;
$pessoa->nomeCompleto = 'Muito Legal';
$pessoa->nomeCompleto;
echo $pessoa->nome;

$pessoa->exec(1, 'teste', true, [1,2,3]);//chamado o metodo __call
