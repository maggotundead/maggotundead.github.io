<?php
    $mails = array('mail@logistika.rs , beorium@gmail.com'); // mail@logistika.rs, beorium@gmail.com
    define('MAIL_SUBJECT', 'Новая заявка с сайта Steel Plugs');
    
    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=utf-8";
    $headers[] = "X-Mailer: PHP/".phpversion();
        
	(isset($_POST['yourname'])) ? $firstname = 'Имя клиента: ' . htmlspecialchars($_POST['yourname']) . "\n": $firstname = '';
	(isset($_POST['phone'])) ? $phone = 'Телефон клиента: ' . htmlspecialchars($_POST['phone']) . "\n": $phone = '';
	(isset($_POST['email'])) ? $email = 'E-mail клтиента: ' . htmlspecialchars($_POST['email']) . "\n": $email = '';
	(isset($_POST['from'])) ? $from = 'Форма: ' . htmlspecialchars($_POST['from']) . "\n": $from = '';
	(isset($_POST['text'])) ? $text= 'Вопрос из футера: ' . htmlspecialchars($_POST['text']) . "\n": $text = '';

	
	$result = true;
    
    foreach ($mails as $val) {
        if (!mail($val, MAIL_SUBJECT, $firstname . $phone . $email . $text . $from, implode("\r\n", $headers))) {
            $result = false;
            break;
        }
    }
    
    if ($result) { 
		header('Location: /thanks.html');
		exit;
	}
?>
