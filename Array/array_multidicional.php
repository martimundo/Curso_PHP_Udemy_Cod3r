<div class="titulo">Array Multidimencional</div>
<?php

$dados = [

    [

        "nome" => "Marcos",
        "idade" => 39,
        "naturalidade" => "São Paulp"
    ],
    [

        "nome" => "Adriana",
        "idade" => 46,
        "naturalidade" => "São Paulo"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'] . '<br>';
//Adicionar um novo elemento no arrayMultidicional

$dados[] = [

    "nome" => "Maria Aparecida",
    "idade" => 30,
    "naturalidade" => "Pernambuco"

];
print_r($dados);
echo '<br>' . $dados[2]['nome'];
echo '<br>' . $dados[2]['idade'];
echo '<br>' . $dados[2]['naturalidade'];

//adicionar novos atributos ao ArrayMultidicional
$dados[2]["Sexo"] = "Feminino<br>";
print_r($dados);

$dados[0]["Sexo"] = "Masculino<br>";
$dados[1]["Sexo"] = "Feminino";

print_r($dados);
