<!DOCTYPE html>
<html>
<head><title>Verificar Senha</title></head>
<body>
<form method="post">
    Senha: <input type="password" name="senha">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST['senha'];

    if (strlen($senha) >= 8 && preg_match("/[a-zA-Z]/", $senha) && preg_match("/[0-9]/", $senha)) {
        echo "Senha forte.";
    } else {
        echo "Senha fraca.";
    }
}
?>
</body>
</html>