<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();

/**
 * essa função mostra o id da sessão que foi criada.
 * Com essa função podemos controlar a sessão do usuário para 
 * que essa sessão não seja roubada por ataques indevidos
 */
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>'.$contador;

/*
 * Uma forma para regenerar a sessão é utilizar a session_regenerate_id para gerar um novo ID da Sessão
 * a cada 5 sessões o ID é regenerado
 */
if($_SESSION['contador'] % 5 === 0){

    session_regenerate_id();
}

/**
 * Aqui podemos destruir a sessão após determinado tempo
 * Podemos gerenciar para voltar para  tela de login...
 */
if($_SESSION['contador'] >= 15){
    session_destroy();
    header('Location: index.php');
}