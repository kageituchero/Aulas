<!DOCTYPE html>
<html>
<head><title>Celsius para Fahrenheit</title></head>
<body>
<form method="post">
    Celsius: <input type="number" name="celsius">
    <input type="submit" value="Converter">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = $_POST['celsius'];
    $f = ($c * 9/5) + 32;
    echo "$c °C = $f °F";
}
?>
</body>
</html>