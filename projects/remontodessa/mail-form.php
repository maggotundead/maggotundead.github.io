<?php
if( (isset($_POST['feedback_name'])&&$_POST['feedback_name']!="")&&(isset($_POST['feedback_mail'])&&$_POST['feedback_message']!="")&&(isset($_POST['feedback_message'])&&$_POST['feedback_message']!="") ) {

	$to='maggotundead@gmail.com';
    $subject = 'new message from site site';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя отправителя: ' . $_POST['feedback_name'] . '</p>
                        <p>Почта отправителя: ' . $_POST['feedback_mail'] . '</p>
                        <p>Сообщение: ' . $_POST['feedback_message'] . '</p>
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: site site  <maggotundead@gmail.com>\r\n";
	mail($to, $subject, $message, $headers);
	
	
}
?>
