<?php

// PEGAR VARIÁVEIS VINDA NA URL
// $variaveis = $_GET;

// POR SER ARRAY, USAMOS O VAR_DUMP PARA VERIFICAR SEU CONTEÚDO
// var_dump($variaveis);

// DOIS SIMBOLOS DE ?, SIGNIFICA UM VALOR PADRÃO CASO O $_GET NÃO EXISTA
$numero1 = $_POST["numero1"] ?? 0;
$numero2 = $_POST["numero2"] ?? 0;
$operador = $_POST["operador"] ?? "somar";

if($operador == "somar") {
    $resultado = $numero1 + $numero2;
} elseif($operador == "subtrair") {
    $resultado = $numero1 - $numero2;
} elseif($operador == "multiplicar") {
    $resultado = $numero1 * $numero2;
} elseif($operador == "dividir") {
    if($numero2 == 0) {
        echo "
        <script>
            alert('Impossível divisão por ZERO');
            exit();
        </script>
        ";
    }else {
    $resultado = $numero1 / $numero2;
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="numero1" class="form-label">Número 1</label>
                        <input id="numero1" name="numero1" type="number" class="form-control" value="<?php echo intval($numero1) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="operador" class="form-label">Operador</label>
                        <select class="form-control" id="operador" name="operador">
                            <option <?php echo $operador=="somar" ? "selected" : "";?> value="somar">Somar</option>
                            <option <?php echo $operador=="subtrair" ? "selected" : "";?> value="subtrair">Subtrair</option>
                            <option <?php echo $operador=="multiplicar" ? "selected" : "";?> value="multiplicar">Multiplicar</option>
                            <option <?php echo $operador=="dividir" ? "selected" : "";?> value="dividir">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="numero2" class="form-label">Número 2</label>
                        <input id="numero2" name="numero2" type="number" class="form-control" value="<?php echo intval($numero2) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="resultado" class="form-label">Resultado</label>
                        <input id="resultado" type="number" class="form-control" readonly value="<?php echo intval($resultado) ?>">
                    </div>
                    <div class="mb-3">
                        <!-- <a href="calculadora.php" class="btn btn-danger">Limpar</a> -->
                        <button onclick="limparForm()" type="button" class="btn btn-danger">Limpar</button>
                        <button class="btn btn-primary" type="submit">Calcular</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        // FUNÇÃO PARA LIMPAR O FORMULÁRIO
        function limparForm() {
            document.getElementById("numero1").value = ""
            document.getElementById("numero1").focus()
            document.getElementById("numero2").value = ""
            document.getElementById("resultado").value = ""
        }
    </script>

</body>
</html>