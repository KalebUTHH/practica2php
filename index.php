<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.php">
    <title>Conversor de Sistemas Numéricos</title>
</head>
<body>
    <h1>Conversor de Sistemas Numéricos</h1>
    <form method="post">
        <label for="decimal">Introduce un número decimal:</label>
        <input type="number" id="decimal" name="decimal" required>
        <br><br>
        <label for="conversion">Elige el sistema de conversión:</label>
        <select id="conversion" name="conversion" required>
            <option value="binario">Decimal a Binario</option>
            <option value="octal">Decimal a Octal</option>
            <option value="hexadecimal">Decimal a Hexadecimal</option>
        </select>
        <br><br>
        <button type="submit">Convertir</button>
    </form> 
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimal = intval($_POST['decimal']); 
    $conversion = $_POST['conversion']; 
    $resultado = "";

    
    if ($conversion == "binario") {
        $resultado = decbin($decimal); 
    } elseif ($conversion == "octal") {
        $resultado = decoct($decimal);
    } elseif ($conversion == "hexadecimal") {
        $resultado = dechex($decimal); 
    }
    echo "<h2>Resultado:</h2>";
    echo "<p>El número decimal <strong>$decimal</strong> en <strong>" . ucfirst($conversion) . "</strong> es: <strong>$resultado</strong></p>";
}
?>