<!DOCTYPE html>
<html>
<head><title>Soma Entre</title></head>
<body>
<form method="post">
    Número 1: <input type="number" name="num1"><br>
    Número 2: <input type="number" name="num2"><br>
    <input type="submit" value="Somar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = 0;

    for ($i = $num1 + 1; $i < $num2; $i++) {
        $soma += $i;
    }
    echo "Soma entre $num1 e $num2: $soma";
}
?>
</body>
</html>