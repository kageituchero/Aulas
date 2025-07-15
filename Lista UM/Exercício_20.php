<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<form method="post">
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" value="Entrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuarioCorreto = "admin";
    $senhaCorreta = "12345";

    if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
</body>
</html>