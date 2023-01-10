<div class="titulo">Básico Sessões</div>
<?php
session_start();

print_r($_SESSION);
echo "<br>";

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Marcos';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'martimundo@gmail.com';
}
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar a Sessão</a>
</p>
