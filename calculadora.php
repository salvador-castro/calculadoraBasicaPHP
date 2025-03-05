<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            display: inline-block;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, select, button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Calculadora en PHP</h2>
    
    <form method="POST">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operacion">
            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">×</option>
            <option value="dividir">÷</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <br>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "<p style='color: red;'>Error: No se puede dividir por cero.</p>";
                    exit;
                }
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>

</body>
</html>