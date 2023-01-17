<?php
session_start();
session_destroy();

//limpar o cookie
unset($_COOKIE['usuario']);
setcookie('usuario', '');


header('Location: Login.php');