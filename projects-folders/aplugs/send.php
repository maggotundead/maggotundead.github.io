<?php
    $mails = array('mail@aplug.com.ua');
    define('MAIL_SUBJECT', 'Новая заявка с сайта Steel Plugs');
    
    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=utf-8";
    $headers[] = "X-Mailer: PHP/".phpversion();
        
    (isset($_POST['firstname'])) ? $firstname = 'Имя клиента: ' . htmlspecialchars($_POST['firstname']) . "\n": $firstname = '';
    (isset($_POST['secondname'])) ? $secondname = 'Фамилия клиента: ' . htmlspecialchars($_POST['secondname']) . "\n": $secondname = '';
    (isset($_POST['phone'])) ? $phone = 'Телефон клиента: ' . htmlspecialchars($_POST['phone']) . "\n": $phone = '';
    (isset($_POST['city'])) ? $city = 'Город клиента: ' . htmlspecialchars($_POST['city']) . "\n": $city = '';
    (isset($_POST['newpostadress'])) ? $newpostadress = 'Телефон клиента: ' . htmlspecialchars($_POST['newpostadress']) . "\n": $newpostadress = '';
    (isset($_POST['email'])) ? $email = 'E-mail заказчика: ' . htmlspecialchars($_POST['email']) . "\n": $email = '';
    (isset($_POST['from'])) ? $from = 'Форма: ' . htmlspecialchars($_POST['from']) . "\n": $from = '';
    (isset($_POST['sizefrom'])) ? $size= 'Размер пробки: ' . htmlspecialchars($_POST['sizefrom']) . "\n": $size = '';
    (isset($_POST['colorfrom'])) ? $color= 'Цвет пробки: ' . htmlspecialchars($_POST['colorfrom']) . "\n": $color = '';
    
	


    $result = true;
    
    foreach ($mails as $val) {
        if (!mail($val, MAIL_SUBJECT, $firstname . $secondname . $phone . $city . $newpostadress . $email . $size . $color . $from, implode("\r\n", $headers))) {
            $result = false;
            break;
        }
    }
    
    if ($result) { 
		header('Location: /thanks.html');
		exit;
	}
?>
										

