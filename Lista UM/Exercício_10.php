<!DOCTYPE html>
<html>
<head><title>Fibonacci</title></head>
<body>
<form method="post">
    Limite: <input type="number" name="limite">
    <input type="submit" value="Gerar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST['limite'];
    $a = 0;
    $b = 1;

    echo "Sequência de Fibonacci até $limite:<br>";
    while ($a <= $limite) {
        echo "$a ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}
?>
</body>
</html>