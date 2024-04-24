<?php

include("../verificar_autenticidade");

if (isset($_GET['ref'])) {
    $pk_cliente = base64_decode(trim($_GET['ref']));

    include('../conexao_mysqli.php');

    $sql = "
    DELETE FROM clientes
    WHERE pk_cliente = '$pk_cliente' 
    ";

    try {
        $query = mysqli_query($conn, $sql);
    } catch(Exception $e) {
        if (mysqli_errno($conn) == 1451) {
            $msg = "Erro: Existe Ordem de Serviço atribuídas à este cliente!";
        }
    }
    echo"
        <script> 
        alert('$msg')
        window.location='./'; 
        </script>;
    ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $msg = "Registro removido com sucesso!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }

    echo "<script> alert('$msg')
        window.location='./'; 
        </script>";
    exit;
}

header('Location: ./');
exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>