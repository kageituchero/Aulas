<!DOCTYPE html>
<html>
<head><title>Número Perfeito</title></head>
<body>
<form method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['num'];
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    if ($soma == $numero) {
        echo "$numero é perfeito.";
    } else {
        echo "$numero não é perfeito.";
    }
}
?>
</body>
</html>