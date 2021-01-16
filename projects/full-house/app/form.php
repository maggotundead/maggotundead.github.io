<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'libs/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . 'libs/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . 'libs/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'] . 'libs/PHPMailerAutoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailerAutoload;

$name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
$phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : '';
$mail = isset($_POST['user_mail']) ? $_POST['user_mail'] : '';
$today = date("F j, Y, g:i a");

$response = [];
$subject = "Новая заявка";
$sendto  = 'competition@doublesuited.com';

// Body
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>$subject</h2>\r\n";
$msg .= "<p><strong>Имя: </strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Email: </strong> ".$mail."</p>\r\n";
$msg .= "<p><strong>Телефон: </strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Дата: </strong> ".$today."</p>\r\n";
$msg .= "</body></html>";

// echo $_SERVER['DOCUMENT_ROOT'];

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

// Настройки SMTP
// $mail_reg->isSMTP();
// $mail_reg->SMTPAuth = true;
// $mail_reg->SMTPDebug = 0;

// $mail_reg->Host = 'tls://mail.adm.tools';
// $mail_reg->Port = 25;
// $mail_reg->Username = 'support@doublesuited.com';
// $mail_reg->Password = '';

// От кого
$mail->setFrom('support@doublesuited.com', 'doublesuited');

// Кому
$mail->addAddress($sendto, 'maxtymosh@gmail.com');

// Тема письма
$mail->Subject = $subject;

// Тело письма

$mail->msgHTML($msg);

if (isset($_FILES['user_scenario']) &&
    $_FILES['user_scenario']['error'] == UPLOAD_ERR_OK) {
		echo "user_scenario";
    $mail->AddAttachment($_FILES['user_scenario']['tmp_name'],
                         $_FILES['user_scenario']['name']);
}


if($mail->send()){
    $response += ['mail_send' => true];
}else{
    $response += ['mail_send' => $mail->ErrorInfo];
}

?>