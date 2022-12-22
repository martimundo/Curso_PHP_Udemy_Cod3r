<div class="titulo">Desafio Switch001</div>

<div class="main">
    <form action="#" method="POST">

        <label for="t1">Conversor de Medidas</label>

        <div class="form-group">
            <div class="col-md">
                <input type="text" name="param" placeholder="infomre a unidade a ser convertida">
                <select name="conversao" class="form-control form-control-sm" id="idconversaoa">
                    <option value="km-milha">KM > Milha</option>
                    <option value="milha-km">Milha > KM</option>
                    <option value="metro-km">Metro > KM</option>
                    <option value="km-metro">KM > Metros</option>
                    <option value="cel-fah">Celsius > Fahrenheit</option>
                    <option value="fah-cel">Fahrenheit > Celsius</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Calcular</button>
    </form>
</div>
<?php

/*$conversao = $_POST['conversao'];
$param = $_POST['param'];*/

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia =  $param * FATOR_METRO_KM;
        $mensagerm =  "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagerm =  "$param Km(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagerm =  "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia  = $param * FATOR_METRO_KM;
        $mensagerm =  "$param Km(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $temperatura  = $param * FATOR_CEL_FAH + 32;
        $mensagerm =  "{$param}º Celsius = {$temperatura}ºFahrenheit";
        break;
    case 'fah-cel':
        $distancia  = ($param -32) * (1 / FATOR_CEL_FAH);
        $mensagerm =  "{$param}ºFahrenheit  = {$temperatura}ºCelsius";
        break;
    default:
        $mensagem = "Ainda sem valor calculado!!!";
}
echo "<p>$mensagem</p>";
