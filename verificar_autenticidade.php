<?php

session_start();
if ($_SESSION["autenticado"] != true) {
    // DESTRUIR QUALQUER SESSÃO EXISTENTE
    session_destroy();

    header("Location: ../tela_login.php");
    exit;
}

?>