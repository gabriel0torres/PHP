<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$_POST['Usuario'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp-mail.outlook.com';
$mail->Port = 25;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->setFrom('email', 'nome');




$mail->Subject = 'Envio de email';
$mail->CharSet = 'UTF-8';
$mail->msgHTML("<p>Olá</p>");
$mail->AltBody = 'Mensagem de boas-vindas';




//Conexão com bd
    $pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
//Query
    $sql = "SELECT email FROM registros where usuario = '".$_POST['Usuario']."'";
    $stmt = $pdo->query($sql);
    
//Resultado   
   
     $result = $stmt->setFetchMode(PDO::FETCH_NUM);
    while ($row = $stmt->fetch()) {

        $mail->addAddress($row[0]);
        if (!$mail->send()) {
            die("Erro no envio do e-mail: {$mail->ErrorInfo}");
  }
  
  echo 'Mensagem enviada com sucesso';
  
      }