<!DOCTYPE html>
<html>
<head><title>Contar Pares</title></head>
<body>
<form method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Contar Pares">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['num'];
    $pares = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        }
    }
    echo "Quantidade de números pares de 1 até $numero: $pares";
}
?>
</body>
</html>