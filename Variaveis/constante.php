<div class="titulo">Constantes em PHP</div>
<p>Uma constante é um identificador (nome) para um valor simples. Como o nome sugere, esse valor não pode mudar durante a execução do script (exceto as constantes mágicas, que não são constantes de verdade). As constantes são case-sensitive por padrão. 
Por convenção, identificadores de constantes são sempre em maiúsculas.</p>
<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>'.TAXA_DE_JUROS;
//TAXA_DE_JUROS = 3.00;
const NOVA_TAXA = 2.0;
echo '<BR>'.NOVA_TAXA;

const NOVATX = 2.8 + 5.8;
echo '<br>'.NOVATX;

echo '<br>'.PHP_VERSION;

echo '<br>'.__LINE__;

echo '<br>'.__FILE__;

echo '<br>'.__DIR__;