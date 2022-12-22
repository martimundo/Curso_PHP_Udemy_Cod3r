<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
Dois trabalhos -> terça e quita!
-Se os dois trabalhos forem executados ->TV 50' e Sorverte
-Se Apenas um unico trabalho for executado ->TV 32' e Sorverte
-Se Nenhum dos trabalhos forem executados ->Ficar em casa.
-->

<form action="#" method="POST">
    <div class="form-group ">
        <label for="t1">Trabalho 1 (Terça)</label>
    </div>
    <div class="form-group">
        <div class="col-md">
            <label for="exampleFormControlSelect1">Selecione uma Ação</label>
            <select name="t1" class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option value="1">Executado</option>
                <option value="0">Não foi executado</option>
            </select>
        </div>
    </div>

    <div class="form-group ">
        <label for="t2">Trabalho 2 (Quinta)</label>
    </div>
    <div class="form-group">
        <div class="col-md">
            <label for="exampleFormControlSelect1">Selecione uma Ação</label>
            <select name="t2" class="form-control form-control-sm" id="exampleFormControlSelect1">
                <option value="1">Executado</option>
                <option value="0">Não foi executado</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Executar</button>
</form>

<?php
//echo $_POST['t1'];
///echo $_POST['t2'];

/*if($_POST['t1'] == 1 & $_POST['t2'] == 1){

    echo"Vamos comprar a TV 50' e tomar um sorver Sorverte";

}else if($_POST['t1'] ==1){

    echo" só vai dar para comprar uma TV de 32' e Sorverte";

}else{

    echo "Vamos ficar em casa :(";
}*/

if (isset($_POST['t1']) && $_POST['t2']) {

    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = '50"';
    } elseif ($t1 xor $t2) {
        $tv = '32"';
    }

    if ($t1 || $t2) {

        $sorvete = true;
    }

    if ($tv) {

        $resultado = "Vamos comprar um TV de <strong>$tv</strong>";
    } else {

        $resultado = "Sem TV dessa vez :(";
    }

    if (!$sorvete) {

        $resultado .= "<br>Estamos mais saudáveis!";
    } else {

        $resultado .= "<br>Sorvete Esta LIBERADO :)";
    }

    echo "<p>$resultado</p>";
}
