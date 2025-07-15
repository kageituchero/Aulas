<!DOCTYPE html>
<html>
<head><title>Verificar Voto</title></head>
<body>
<form method="post">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="number" name="idade"><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "Nome: $nome<br>";

    if ($idade >= 16) {
        echo "Pode votar.";
    } else {
        echo "Não pode votar.";
    }
}
?>
</body>
</html>