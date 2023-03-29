<?php

$user = $_POST['username'];
$pass = $_POST['password'];

$host = "localhost";
$username = "root";
$password = "";
$database = 'teste';

$con = mysqli_connect($host,$username,$password,$database);



$result = mysqli_query($con,"SELECT * FROM USUARIOS WHERE LOGIN = '$user' and SENHA = '$pass'");

$conteudo = mysqli_fetch_array($result);

var_dump($conteudo); echo "<br>";


foreach($conteudo as $i){

    echo $i;
}


echo "<br>";
echo $user;
echo $pass;


?>