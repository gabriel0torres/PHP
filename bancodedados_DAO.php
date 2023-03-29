<?php

// função pula linha:
function br(){
    echo '<br>';
}
 
//PDO = PHP Data Object
//DSN = data source name ou nome de fonte da dados

$dsn = 'mysql:host=localhost;dbname=teste';
$username = 'root'; 
$passwd = '';

try{

    $conexao = new PDO($dsn,$username,$passwd);
    echo 'CONEXÃO REALIZADA COM SUCESSO !';

}catch(PDOException $ex){

    echo 'ERRO: '.$ex->getMessage(); br();
    echo 'NÃO FOI POSSÍVEL REALIZAR A CONEXÃO COM O BANCO DE DADOS';

}