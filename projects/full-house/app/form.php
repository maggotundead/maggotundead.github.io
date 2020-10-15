<?php

    $to='maggotundead@gmail.com';
    $subject = 'Новая заявка Full House';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>

                        <p>Имя клиента: ' . $_POST['user_name'] . '</p>

                        <p>Телефон клиента: ' . $_POST['user_phone'] . '</p>

                        <p>Почта клиента: ' . $_POST['user_mail'] . '</p>

                        <p>Сценарий: ' . $_POST['user_scenario'] . '</p>

                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers = "From:<maggotundead@gmail.com>\r\n";
    mail($to, $subject, $message, $headers);

?>