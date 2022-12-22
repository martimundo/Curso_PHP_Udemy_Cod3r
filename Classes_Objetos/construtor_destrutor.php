<div class="titulo">Construtor e Destrutor</div>
<?php


class Pessoa
{

    public $nome;
    public $idade;


    public function __construct($nome, $idade)
    {
        echo "Construtor Invocado<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo 'Classe morreu<br><hr>';
    }

    public function apresentar()
    {

        echo "{$this->nome} tem {$this->idade} de idade<br>";
    }
}
/**
 * Quando criamos um objeto que é obrigatório a passagem de parametros, não será possível iniciar o objeto, pq obrigatoriamente
 * temos que passar os parametros para que o objeto seja criado.
 */
$pessoa = new Pessoa("Marcos", 49);
$pessoa->apresentar();
unset($pessoa);

$pessoab = new Pessoa("Adriana", 46);
$pessoab->apresentar();
$pessoab = null;
