<?php
// VERIFICA SE ESTÁ VINDO CONFIGURAÇÕES PARA VALIDAÇÃO DE E-MAIL E SENHA

if ($_POST) {
    // VERIFICA SE FOI ENVIADO OS CAMPOS OBRIGATÓRIOS
    if (empty($_POST["email"]) || empty($_POST["senha"])) {
        echo "
        <script>
        alert('Por favor, preecha todos os campos obrigatórios!');
        window.location='./tela_login.php';
        </script>
        ";
        exit;
    } else {
        include('conexao_mysqli.php');
        // RECUPERAR INFORMAÇÕES DO FORMULÁRIO LOGIN
        $email = trim($_POST["email"]);
        $senha = trim($_POST["senha"]);

        // MONTAR SINTAXE SQL PARA CONSULTAR NO BANCO DE DADOS
        $sql = "
        SELECT pk_usuario , nome
        FROM usuarios
        WHERE email LIKE '$email'
        AND senha LIKE '$senha'
        ";

        $query = mysqli_query($conn, $sql);

        // VERIFICAR SE ENCONTROU ALGUM REGISTRO NA TABELA

        if (mysqli_num_rows($query) > 0) {

            // CRIAR SESSÃO PARA VARIÁVEL GLOBAL
            session_start();

            // DECLARO VARIÁVEL GLOBAL INFORMANDO QUE USUÁRIO ESTÁ AUTENTICADO CORRETAMENTE
            $_SESSION["autenticado"] = true;

            header('Location: ./crud_mysqli');
            exit;
        } else {
            echo "
            <script>
                alert('E-mail e/ou senha inválidos!');
                window.location='./tela_login.php';
            </script>
            ";
            exit;
        }
    }
} else {
    header('Location: ./tela_login.php');
    exit;
}
