<div class="titulo">Tipos Boleanos</div>
<?php

echo true;
echo"<br>";
echo false;

echo "<br>".var_dump(true);
echo "<br>".var_dump(false);
echo "<br>".var_dump('false');
echo "<br>".var_dump('true');//considerado textual e não validação.

//fazer as regras de conversões 
echo'<p>Regras:</p>';
echo '<br>'. var_dump((bool) 0);
echo '<br>'. var_dump((bool) 20);
echo '<br>'. var_dump((bool) -1);
