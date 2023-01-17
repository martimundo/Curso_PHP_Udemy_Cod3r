<div class="titulo">Escrevendo em Arquivos</div>

<?php

//abrindo um arquivo com a função fopen()...

$arquivo = fopen('teste.txt','w');
//para escrever dentro do arquivo
fwrite($arquivo, "Valor Inicial\n");

$str = "Nova Linha\n";
fwrite($arquivo, $str);
echo 'Nova linha criada com sucesso!';

//para fechar o arquivo, usamos o fclose..
fclose($arquivo);

$arquivo = fopen('teste.txt','w');
fwrite($arquivo, 'Novo Conteudo');
fclose($arquivo);
echo "Arquivo Fechado com sucesso";

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, 'com novos valores\n');
fwrite($arquivo, 'Adicionado novos dados!!!! \n');
fclose($arquivo);

/**
 * essa instrução serve para criar um novo arquivo, porém
 * como o arquivo ja existe uma mensagem de alerta será emitida...
 */
$arquivo = fopen('teste.txt', 'x');

//com esse instrução sim, um novo arquivo será gerado com sucesso, pois o nome do arquivo foi modificado
$arquivo = fopen('teste001.txt', 'x');







