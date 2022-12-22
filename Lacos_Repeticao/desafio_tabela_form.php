<div class="titulo">Desafio Criação de Tabela</div>

<form action="#" method="post">
    <fieldset>
        <legend>Numero de Linhas</legend>
        <div class="mb-3 ">
            <input type="number" id="linhas" value=<?= $_POST['linhas'] ?? 10 ?> name="linhas" class="form-control col-4" placeholder="Informe o numero de linhas">
        </div>

        <legend>Numero de Colunas</legend>
        <div class="mb-3 ">
            <input type="number" id="linhas" value=<?= $_POST['colunas'] ?? 10 ?> name="colunas" class="form-control col-4" placeholder="Informe o numero de Colunas">
        </div>

        <button type="submit" class="btn btn-primary">Gerar Tabela</button>
    </fieldset>
</form>

<table class="table table-dark table-hover">
    <?php


    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);

    if(!$linhas) $linhas = 10;
    if(!$colunas) $colunas = 10;

    $num = 1;
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colunas; $j++) {

            echo "<td>$num</td>";
            $num++;
        }
        echo "</tr>";
    }
    ?>
</table>