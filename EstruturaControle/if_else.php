<div class="titulo">If e Else em PHP</div>
<p>Qualquer script PHP é construído por uma série de instruções. Uma instrução pode ser uma atribuição, uma chamada de função, um laço de repetição, uma instrução condicional, ou mesmo uma instrução que não faz nada (um comando vazio). Instruções geralmente terminam com um ponto e vírgula. Além disso, as instruções podem ser agrupados em um grupo de comandos através do encapsulamento de um grupo de comandos com chaves. Um grupo de comandos é uma instrução também. 
    Os vários tipos de instruções são descritos neste capítulo.</p>

<?php

if(true){
    echo "Serei Impresso?/<br>";
    echo "Serei Impresso?/<br>";
}else{

    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}
if(false){
    echo "Passo A<br>";

}else if(true){

    echo "Passo B<br>";
    
}else{
    echo "Ultimo Passo<br>";
}


echo "Fim<br>";