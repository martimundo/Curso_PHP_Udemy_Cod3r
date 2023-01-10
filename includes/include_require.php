<div class="titulo">Include vs Require</div>
<p>O include inclui um novo arquivo dentro do seu código. Caso o arquivo não seja carregado, o sistema<br>
não para sua executação emitidno apenas um warning.
</p>
<p>Ja o Require possui a mesma função do include, porém, se o arquivo não carregado ele gerará uma erro Fatal<br>
ocasionando a parada do sistema. Assim o require possui maior sergurança para sua aplicação.
</p>
<hr>
<?php 
echo 'Usando include com arquivo Inexiste...<br>';
include('arquivo_inexistente.php');

echo '<hr>';

echo 'Usando o Require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');
