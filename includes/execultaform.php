<?php

//$nome = $_POST ['nome'];
//$telefone = $_POST ['telefone'];


//$fp = fopen('data.txt', 'a');
//$fp = fopen(' ' .$nome. '.txt' , 'a');

//Mostrar a variavel do arquivo (imprime)
//$arquivo = $_FILES['arquivo'];
//echo '<pre>';
//print_r($arquivo);
//echo '</pre>';

//Definir a pasta onde será enviado o arquivo
$pasta = "./assets/documentsclient/";

//Linha que define o nome do arquivo
$novoarquivo = $pasta . basename($_FILES['arquivo']['name']);

//Verifica se o aploaded file foi sucesso
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novoarquivo)){
    echo "foi enviado com sucesso";
}

fwrite ($fp, $nome . "\n"); //Da entrada do documento txt
fwrite ($fp, $telefone . "\n"); //faz o fechamento do documento txt
//dado = $nome ',' .$telefone. ',' . "\n"

fwrite ($fp, $dado); //Não precisa para fazer o file funcionar
fclose($fp);         //Não precisa para fazer o file funcionar

//Define onde a pagina se redirencionará após finalizar o procedimento
header ("Location: http://127.0.0.1/KIGSessence");
?>