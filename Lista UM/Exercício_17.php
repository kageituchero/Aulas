<!DOCTYPE html>
<html>
<head><title>Validar Data</title></head>
<body>
<form method="post">
    Dia: <input type="number" name="dia"><br>
    Mês: <input type="number" name="mes"><br>
    Ano: <input type="number" name="ano"><br>
    <input type="submit" value="Validar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    if (checkdate($mes, $dia, $ano)) {
        echo "Data válida.";
    } else {
        echo "Data inválida.";
    }
}
?>
</body>
</html>