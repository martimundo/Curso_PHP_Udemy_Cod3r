<div class="titulo">Usando Metodo Post com PHP</div>

<form action="#" method="POST">

    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" id="">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="SP">São Paulo</option>
        <option value="ES">Espirito Santo</option>
    </select>
    <button>Enviar</button>
</form>
<style>

    form > *{
        font-size: 1.3rem;
    }

</style>

<?php


print_r($_GET);
echo'<br>';
print_r($_POST);

echo '<br>'. count($_POST);
