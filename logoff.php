<?php

session_start();

//remover indices do array de sessão

//remove o indice caso exista
//unset($_SESSION['autenticado']);



//destruir a variável de sessão
//session_destroy

session_destroy();
header('Location:index.php');

?>