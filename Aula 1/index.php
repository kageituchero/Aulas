<?php

$mensagem = 'Olá, mundo!';
echo $mensagem;


echo '<h2> Olá, mundo!</h2>';


$primeiro_nome = 'Arthur';

$idade = 18;

$gosta_de_bolo = true;

$resultado_ano = 2025 - $idade;

echo $resultado_ano;

echo '<br>';
echo '<br>';

$num = 37.5;

echo $num;

echo '<br>';
echo '<br>';
 
$num2 = (int) $num;

echo $num2;

$nota = 8;

if ($nota >= 7) {
    echo '<p>Passou na Prova</p>';
} else if ($nota == 'Galinha') {
    echo '<p>Como você fez isso</p>';
} else {
    echo '<p>Não Passou na Prova</p>';
};

for ($i = 0; $i <=5; $i++) {
    
    //echo '<p> Contagem,: '. $i . '</p>';

    echo "<p> Contagem: $i </p>";

};

$frutas = array('Laranja','Banana','Tomate','Bergamota');

echo $frutas[0];

function saudacao($nome){
    return "Olá, mundo!";
};

echo saudacao('Marlon');

?>