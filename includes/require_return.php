<div class="titulo">Require com Return</div>
<?php

$valorRetorno = require('return_usado.php');
echo "{$valorRetorno}<br>";
echo "{$variavelRetonada} pois estou dentro do escopo global do arquivo incluido... <br> ";

echo "a superglobal __DIR__ retonra o caminho absoluto do diretório<br>";
echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__.'/return_nao_usado.php');
echo "$valorRetorno2<br>";
echo "Acessando a variavel declarada dentro do arquivo return_nao_usado<br>";
echo "$variavelDeclarada";