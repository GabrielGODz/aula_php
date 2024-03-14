<?php
$numero = $_POST["numero"] ?? 0;
// LAÇO DE REPETIÇÃO FOR - UTILIZA UMA VARIÁVEL, COMO CONTADOR ($I); É NECESSÁRIO UM VALOR INICIAL E FINAL
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                Laço For
                            </div>
                            <div class="card-body">
                                <input id="numero" name="numero" type="number" class="form-control" value="<?php echo intval($numero) ?>">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Contar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Resultado
                    </div>
                    <p>
                    <?php
                    for ($i = 0; $i < $numero; $i++) {
                        echo $i . "<br>";
                    }
                    echo substr($numero,0,-2);
                    ?>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>