<div class="titulo">interface</div>

<ul>
    <li>Uma classe pode implemtar multiplas interfaces.</li>
    <li>Obrigatoriamente todas as interfaces tem a definição dos metódos. Os metodos são publicos e não temos como 
    definir métodos privados ou protegidos.</li>
    <li> Uma interface pode externder de outra interface.</li>
    <li>Uma Classe herda apenas de uma unica classe.</li>
</ul>




<?php

interface Animal
{

    function respirar();
}

interface Canino
{
    function latir(): string;
}

class Cachorro implements Animal, Canino
{

    function respirar()
    {
        echo "Usarei o Oxigênio<br>";
    }
    function latir(): string
    {
        return 'Au-AUUUUUUU';
    }
}

$animal1 = new Cachorro();
$animal1->respirar();
echo $animal1->latir();


echo 'Fim <BR>';
