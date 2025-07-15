<!DOCTYPE html>
<html>
<head><title>Palíndromo</title></head>
<body>
<form method="post">
    Palavra: <input type="text" name="palavra">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST['palavra'];
    $inv = strrev($p);

    if ($p == $inv) {
        echo "$p é um palíndromo.";
    } else {
        echo "$p não é palíndromo.";
    }
}
?>
</body>
</html>