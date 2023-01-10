<div class="titulo">Include Função</div>
<?php
echo "Carregando: include_funcao<br>";

function carregarArquivo(){

    include('include_arquivo.php');

    echo $variavel . '<br>';
   echo 'Resultado da Soma é: '. somar(5, 10). '<br>';
}

carregarArquivo();