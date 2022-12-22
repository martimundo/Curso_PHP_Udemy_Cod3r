<div class="titulo">Array Constante</div>

<?php

//Arrays constantes em PHP não existe a possibilidade de modificar os dados que foram atribuidos no array.

const FRUTAS =['Melancia', 'Mamão'];

//nesse caso ñ sera possivel inserir novos intens ao array.

//FRUTAS[0] = 'Banana';

//Só podemos ler os dados da Constante...
echo FRUTAS[1];
const CARROS = array("Fiat" => "Uno", "Ford" => "Ford KA");
echo '<br>' . CARROS["Fiat"];

//outar forma de definiar um array constante é utilizando o define
define('CIDADES', array('São Paulo', 'Recife'));
echo '<br>'. CIDADES[1];