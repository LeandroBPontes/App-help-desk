<?php

/*echo '<pre>';
print_r($_POST); 
echo '</pre>';*/

session_start();

$arquivo = fopen('arquivo.txt', 'a');

$titulo = str_replace('|', '-', $_POST['titulo'] );
$categoria = str_replace('|', '-', $_POST['categoria'] );
$descricao = str_replace('|', '-', $_POST['descricao'] );

//FUNCAO PHP_EOL -> INDICA O FIM DA LINHA E PULA UMA
$texto = $_SESSION['id'] . '|' . $titulo . '|' . $categoria . '|' . $descricao . '|' .  PHP_EOL;


fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');

?>