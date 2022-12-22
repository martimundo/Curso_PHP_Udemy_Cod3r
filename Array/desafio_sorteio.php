<div class="titulo">Desafio Sorteio</div>
<?php 


$nome = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$indice = array_rand($nome);
echo "<h1> $nome[$indice]</h1>";