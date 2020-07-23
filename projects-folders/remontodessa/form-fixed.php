<?php
if((isset($_POST['user_name'])&&$_POST['user_name']!="")&&(isset($_POST['user_phone'])&&$_POST['user_phone']!="")&&(isset($_POST['user_mail'])&&$_POST['user_mail']!="")&&(isset($_POST['user_message']))) {
	$to='maggotundead@gmail.com';
    $subject = 'Новая заявка на бесплатный замер Start Remont';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя клиента: ' . $_POST['user_name'] . '</p>
                        <p>Телефон клиента: ' . $_POST['user_phone'] . '</p> 
                        <p>Почта клиента: ' . $_POST['user_mail'] . '</p> 
                        <p>сообщение от клиента: ' . $_POST['user_message'] . '</p>
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Start Remont  <maggotundead@gmail.com>\r\n";
    mail($to, $subject, $message, $headers);
    	
	
}
?>
