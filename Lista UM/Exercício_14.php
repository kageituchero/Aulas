<!DOCTYPE html>
<html>
<head><title>Ano Bissexto</title></head>
<body>
<form method="post">
    Ano: <input type="number" name="ano">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST['ano'];
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "$ano é bissexto.";
    } else {
        echo "$ano não é bissexto.";
    }
}
?>
</body>
</html>