<div class="titulo" center azul>Integração CSS</div>
<p>Nesse ponto foi explicado como integrar o PHP com CSS.</p>


<h2 azul>
    <?php
        echo"Ola ";
        echo'<small>';
        echo 'Mundo';
        echo'</small>';

    ?>
</h2>

<?= "<div>Nova forma de expressar!!!</div>"?>
<br>
<div><button><?= "Legal"?></button></div>

<style>

    button{
        padding:5px <?= 2*20 ?>px;
        background-color: #4286f4;
        color:#eee;
        font-weight: bold;
        border-radius: 10px;
    }
    
    [center]{
        display: flex;
        justify-content: center;
    }
    <?= "[azul]"?>{
        color #1867c0;
       
    }
</style>