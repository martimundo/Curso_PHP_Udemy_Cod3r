<div class="tituloi">Desafio Data</div>
<?php

class Data
{

    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentarData()
    {

        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new Data();
echo $data1->apresentarData(), '<br>';

//Modificando os astributos da classe com novos valores.
$data2 = new Data;
$data2->dia = 21;
$data2->mes = 12;
$data2->ano = 2022;
echo $data2->apresentarData();