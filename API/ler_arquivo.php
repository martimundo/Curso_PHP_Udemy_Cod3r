<div class="titulo">Ler arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);//define a quantidade de bytes que será lido.
echo '<br>';
echo fread($arquivo, 10);
echo '<hr>';

//abre e le o arquivo
$arquivo = fopen('teste.txt', 'r');
$sizeFile = filesize('teste.txt');
echo $sizeFile.'<br>';

echo fread($arquivo, $sizeFile);
fclose($arquivo);
echo '<hr>';
//ler arquivo linha a linha mais usual

$arquivo = fopen('teste.txt','r');

//o fgets fara a leitura de linha a linha..
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fclose($arquivo);
echo '<hr>';

$arquivo = fopen('export-products.csv', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);
