<div class="titulo">Herança</div>
<?php


class Pessoa
{
    public $nome;
    public $idade;


    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada com sucesso";
    }

    function __destruct()
    {
        echo "Tchau<br>";
        
    }

    public function apresentar()
    {

        echo "{$this->nome} anos {$this->idade} de idade....<br>";
    }
}
//*************************************************************************************************

//Conceito de Herança que herda da classe Pessoa
class Usuario extends Pessoa
{

    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Usuário Criado<br>";
    }


    function __destruct()
    {
        echo "Usuário deslogado";
    }

    public function apresentar()
    {
        echo "{$this->login}: ";
        parent::apresentar();//esta vinculado a classe PAI..
    }
}

$usuario = new Usuario("Marcos",40, "martimundo");
$usuario->apresentar();
unset($usuario);
