<div class="titulo">Switch com PHP</div>
<div class="container">
    <form action="#" method="POST">
        <div class="form-group ">
            <label for="t1">Categoria do Veículo</label>
        </div>
        <div class="form-group">
            <div class="col-md">
                <label for="exampleFormControlSelect1">Selecione a categoria</label>
                <select name="categoria" class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option value="Luxo">Luxo</option>
                    <option value="SUV">SUV</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Popular">Popular</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Executar</button>
    </form>
</div>



<?php


$categoria = $_POST['categoria'];
$preco = 0.0;
$carro = '';

/*if (isset($_POST['categoria'])) {

    if ($categoria === "Luxo") {

        $preco = 250000;
        $carro = "Mercedes - Conversivél";

    } else if ($categoria === "SUV") {

        $preco = 800000;
        $carro = "Renegade";

    } elseif ($categoria === "Sedan") {

        $preco = 35000;
        $carro = "Etios";

    } else {

        $categoria = "Popular";
        $preco = 10000;
        $carro = "Celta";
    }
    
}*/

switch ($categoria) {

    case 'Luxo':
        $preco = 250000;
        $carro = "Mercedes - Conversivél";
        break;
    case 'SUV':
        $preco = 800000;
        $carro = "Renegade";
        break;
    case 'Sedan':
        $preco = 35000;
        $carro = "Etios";
        break;
    case 'Popular';
        $preco = 10000;
        $carro = "Celta";
        break;
    default;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br> Categoria: $categoria<br>Preço: R$ $precoFormatado</p>";
