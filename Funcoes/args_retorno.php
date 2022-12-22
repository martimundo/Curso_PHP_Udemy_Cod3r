<div class="titulo">Argumentos e Retorno</div>

<?php

//Funçaõ sem parametros
function obterMensagem(){

    return 'Sejam bem Vindo(a)!!!';

}
obterMensagem();//aqui não retorna nada na tela..

//para retornar a mensagem podemos usar dessa forma, atribuindo a função a uma variavel.
$mensagem = strtoupper(obterMensagem());
echo $mensagem;
echo '<br>';

//Função com Paramento com nome ou argumentos
function obterMensagemComNome($nome){

    return "Bem Vindo {$nome}";

}
echo '<br>', obterMensagemComNome('Marcos Artimundo');

//Função para somar dois numeros.
function soma($a, $b){

    return $a + $b;
}
echo '<br>', soma(10, 40);
echo '<br>', soma(40, 40);