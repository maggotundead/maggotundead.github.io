<?php
$to = "maggotundead@yandex.ua";
$tema = "Форма обратной связи на PHP";
$message = "client name: ".$_POST['user_name']."<br>";
  $message .= "Client e-mail: ".$_POST['user_mail']."<br>";
$message .= "Client message: ".$_POST['user_message']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers);
?>