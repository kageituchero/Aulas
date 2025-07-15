<!DOCTYPE html>
<html>
<head><title>Positivo ou Negativo</title></head>
<body>
<form method="post">
    Número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    if ($n > 0) echo "Positivo";
    elseif ($n < 0) echo "Negativo";
    else echo "Zero";
}
?>
</body>
</html>