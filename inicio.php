<?php

$user = $_POST['username'];
$pass = $_POST['password'];

$host = "localhost";
$username = "root";
$password = "";
$database = 'teste';

$con = mysqli_connect($host,$username,$password,$database);

$result = mysqli_query($con,"SELECT * FROM USUARIOS WHERE LOGIN = '$user' and SENHA = '$pass'");
$conteudo = mysqli_fetch_array($result, MYSQLI_NUM);

var_dump($conteudo); echo "<br>";

$nome = $conteudo[1];
var_dump($nome)
/*
foreach($conteudo as $i){
    
        var_dump($i); echo "<br>";
    
}*/
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Inicial</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8" id="botoes">
			 
			<button type="button" class="btn btn-success btn-md">
				INCLUIR REGISTRO
			</button>
		</div>
		<div class="col-md-4" id="nome">
            Bem vindo: <?php echo $nome; ?>
		</div>
	</div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>