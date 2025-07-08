<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador do Número Primo</title>
</head>
<body>
    
<form method="POST" action="">

<label for="numero_primo">Verefica se é um número primo:</label>
<input type="number" id="numero_primo" name="numero_primo" required>
<button type="submit" name="verificar_primo">Verificar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['verificar_primo'])){
           
        $numero = $_POST['numero_primo'];
        $ehPrimo = true;


        if($numero <= 1){
            $ehPrimo = false;
        }else{
            for($i = 2; $i <= sqrt($numero); $i++){
                if( $numero % $i == 0){
                    $ehPrimo = false;
                    break;

                };
            };
        };
        echo "O número $numero é ". ($ehPrimo ? 'primo.' : 'primo não.');
    };
};

?>

</body>
</html>