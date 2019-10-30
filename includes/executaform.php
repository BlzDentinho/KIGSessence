<?php

//Definir a pasta onde será enviado o arquivo
$pasta = "./assets/documentsclient/";

//Linha que define o nome do arquivo
//$novoarquivo = $pasta . basename($_FILES['arquivo']['name']);

//Verifica se o aploaded file foi sucesso
//if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $novoarquivo)){
    //echo "foi enviado com sucesso";
//}
$login= $_POST["login"]; 
$senha= $_POST["senha"];
$csenha= $_POST["csenha"];
$email= $_POST ["email"];

$fp = fopen('./../documentosdoscliente/dados.txt', 'w');

if ($senha == $csenha) {
    fwrite ($fp, $login . "\n");
    fwrite ($fp, $senha . "\n");
    fwrite ($fp, $csenha . "\n");
    fwrite ($fp, $email . "\n");
    echo 'Deu certo';
    
    //fwrite ($fp, $dado); //Não precisa para fazer o file funcionar
    //fclose($fp);         //Não precisa para fazer o file funcionar
}



//Define onde a pagina se redirencionará após finalizar o procedimento
//header ("Location: http://127.0.0.1/KIGSessence");
?>