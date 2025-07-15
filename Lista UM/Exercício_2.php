<!DOCTYPE html>
<html>
<head><title>Tabuada</title></head>
<body>
<form method="post">
    Número: <input type="number" name="numero">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
</body>
</html>