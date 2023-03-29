<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$host = "localhost";
$username = "root";
$password = "";
$database = 'teste';

$con = mysqli_connect($host,$username,$password,$database);

?>
    <form method="POST" action="inicio.php">
        
        USUÁRIO:<input type="text" name="username" value="username"><br>
        SENHA:<input type="password" name="password" value="password"><br>
        ENTRAR<input type="submit" name="entrar"> 

    </form>
    
</body>
</html>