<?php
$numero = $_POST["numero"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
                                Tabuada
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
                        if ($numero != 0) {

                            echo "<h4> Tabuada do $numero </h4>";

                            for ($i = 1; $i <= 10; $i++) {
                                echo "$numero x $i = " . $numero * $i . "<br>";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>