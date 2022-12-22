<div class="titulo">Entendendo o GET em PHP</div>
<?php

//a superglobal $_GET é um Array vazio pelo qual os dados são passados direto pelo navegador.
//para pegar os dados pelo GET, após o endereço da URL, precisamos iniciar com um ponto de interrogação ?...
//os demais parametros que serão coletados são passados após o & comercial

print_r($_GET);
echo "<br>{$_GET['nome']}";