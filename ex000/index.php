<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="">Numero 1:</label>
        <input type="number" name="num1"> <br><br>
        <label for="">Numero 2:</label>
        <input type="number" name="num2"> <br><br>

        <label for="">Operacao</label>
        <select name="operacao" id="">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtracao</option>
            <option value="multiplicacao">Multiplicacao</option>
            <option value="divisao">Divisao</option>
        </select>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php 
        if(isset($_POST['calcular'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];
            $resultado = 0;

            switch($operacao){
                case 'soma':
                    $resultado = $num1 + $num2;
                    break;
                case 'subtracao':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    break;
                case 'divisao':
                    if($num2 != 0){
                        $resultado = $num1 / $num2;
                    } else {
                        echo "Nao e possivel dividir por zero!";
                    }
                    break;
                
            }
        }

        if(isset($resultado)){
            echo "O resultado da operacao e: " . $resultado;
        }
    ?>
</body>
</html>