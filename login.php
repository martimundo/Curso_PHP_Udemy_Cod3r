<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];


if (isset($_POST['email'])) {

    $usuarios = [
        [
            "nome" => "Marcos",
            "email" => "martimundo@gmail.com",
            "senha" => "123456",
        ],
        [
            "nome" => "Adriana",
            "email" => "adriana@gmail.com",
            "senha" => "654321",
        ]
    ];

    foreach ($usuarios as $usuario) {

        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];


        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            //criando o cookies qdo o usuário logou com sucesso
            $exp = time() + 60 * 60 *24 * 30;
            setcookie('usuario', $usuario['nome'],$exp);         

            header('Location: index.php');
        }
    }

    if (isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Usuário ou Senha invalido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Projeto-Curso de PHP</title>
</head>

<body class="login">
    <header class="header">
        <h1>Curso de PHP</h1>        
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Acessar</h3>
            <?php if ($_SESSION['erros']) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu E-mail">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="Informe sua senha">
                </div>
                <button>Entrar</button>
            </form>

        </div>
    </main>
    <footer class="footer">
        Curso de PHP para WEB &copy;<?= date('Y'); ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>