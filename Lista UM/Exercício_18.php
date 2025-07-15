<!DOCTYPE html>
<html>
<head><title>Maior Número</title></head>
<body>
<form method="post">
    Número 1: <input type="number" name="n1"><br>
    Número 2: <input type="number" name="n2"><br>
    Número 3: <input type="number" name="n3"><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    $maior = $a;
    if ($b > $maior) $maior = $b;
    if ($c > $maior) $maior = $c;

    echo "Maior: $maior";
}
?>
</body>
</html>