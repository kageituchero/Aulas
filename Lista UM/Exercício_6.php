<!DOCTYPE html>
<html>
<head><title>Divisores</title></head>
<body>
<form method="post">
    Número: <input type="number" name="numero">
    <input type="submit" value="Mostrar">
</form>

<?php
if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) echo "$i<br>";
    }
}
?>
</body>
</html>