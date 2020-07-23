<?php
if( (isset($_POST['subscriber_name'])&&$_POST['subscriber_name']!="")&&(isset($_POST['subscriber_mail'])&&$_POST['subscriber_mail']!="") ) {

	$to='maggotundead@gmail.com';
    $subject = 'Новая заявка на подписку Start Remont';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя подписчика: ' . $_POST['subscriber_name'] . '</p>
                        <p>Почта подписчика: ' . $_POST['subscriber_mail'] . '</p>
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Start Remont  <maggotundead@gmail.com>\r\n";
	mail($to, $subject, $message, $headers);
	
	
}
?>
