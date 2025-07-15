<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Números Amigos</title>
</head>
<body>

<form method="POST" action="">
    <label for="num1">Número 1:</label>
    <input type="number" id="num1" name="num1" required>
    <label for="num2">Número 2:</label>
    <input type="number" id="num2" name="num2" required>
    <button type="submit" name="verificar_amigos">Verificar</button>
</form>

<?php
function somaDivisores($n) {
    $soma = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_amigos'])) {
    $a = (int)$_POST['num1'];
    $b = (int)$_POST['num2'];

    if ($a <= 0 || $b <= 0) {
        echo "Por favor, insira apenas números inteiros positivos.";
    } else {
        $somaA = somaDivisores($a);
        $somaB = somaDivisores($b);

        if ($somaA === $b && $somaB === $a) {
            echo "$a e $b são números amigos.";
        } else {
            echo "$a e $b não são números amigos.";
        }
    }
}
?>

</body>
</html>