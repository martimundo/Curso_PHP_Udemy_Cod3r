<?php
namespace contexto;
?>

<div class="titulo">Namespace Básico</div>
<?php

echo __NAMESPACE__ . '<br>';
const contante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 789);
define('outro_contexto\constante4', 321);

echo contante1 . '<br>';
echo constante2 . '<br>';
//echo contexto\contante3 . '<br>';
//echo \contexto\constante3.'<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>';

function multiplicar($a, $b)
{
    return $a * $b;
}

echo \contexto\multiplicar(5, 10).'<br>';

function strpos($str, $text){
    echo "Buscando o texto {$text} em {$str}<br>";
    return 1;
}

//acessanso os dados através da funcção da API do PHP
echo strpos('Texto generico para busca', 'busca').'<br>';
//buscando o texto atrés da função que foi criada no contexto do namespace e não gerar conflito
echo \strpos('Texto generico para busca', 'busca');
