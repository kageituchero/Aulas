<!DOCTYPE html>
<html>
<head><title>IMC</title></head>
<body>
<form method="post">
    Peso (kg): <input type="number" name="peso" step="0.1"><br>
    Altura (m): <input type="number" name="altura" step="0.01"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);
    echo "IMC: $imc<br>";

    if ($imc < 18.5) {
        echo "Abaixo do peso.";
    } elseif ($imc < 25) {
        echo "Peso normal.";
    } elseif ($imc < 30) {
        echo "Sobrepeso.";
    } else {
        echo "Obesidade.";
    }
}
?>
</body>
</html>