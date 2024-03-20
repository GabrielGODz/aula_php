<?php

$numero = $_POST["numero"] ?? 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes</title>
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
                               Função Mês
                            </div>
                            <div class="card-body">
                                <!-- MB = Margin Bottom, ou seja, margem inferior -->
                                <div class="mb-3">
                                    <label for="" class="fomr-label">Número</label>
                                    <input type="number" min="1" max="12" name="numero" class="form-control" value="<?php echo $numero ?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Verificar</button>
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
                    <div class="card-body">
                        <p>
                        <?php
                        switch($numero) {
                            case 1:
                                echo "Janeiro";
                                break;
                            case 2:
                                echo "Fevereiro";
                                break;
                            case 3:
                                echo "Março";
                                break;
                            case 4:
                                echo "Abril";
                                break;
                            case 5:
                                echo "Maio";
                                break;
                            case 6:
                                echo "Junho";
                                break;
                            case 7:
                                echo "Julho";
                                break;
                            case 8:
                                echo "Agosto";
                                break;
                            case 9:
                                echo "Setembro";
                                break;
                            case 10:
                                echo "Outubro";
                                break;
                            case 11:
                                echo "Novembro";
                                break;
                            case 12:
                                echo "Dezembro";
                                break;
                            default:
                                echo "Mês não reconhecido";
                                break;
                        }
                        ?>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>