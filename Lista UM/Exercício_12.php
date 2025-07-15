<!DOCTYPE html>
<html>
<head><title>Contar Vogais</title></head>
<body>
<form method="post">
    Texto: <input type="text" name="texto">
    <input type="submit" value="Contar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
    $conta = 0;
    $vogais = ['a','e','i','o','u'];

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array(strtolower($texto[$i]), $vogais)) {
            $conta++;
        }
    }

    echo "Vogais: $conta";
}
?>
</body>
</html>
