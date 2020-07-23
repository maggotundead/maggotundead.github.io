<?php

    $to='maggotundead@gmail.com';
    $subject = 'Новая заявка ses bal';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>

                        <p>Имя клиента: ' . $_POST['formo'] . '</p>

                        <p>Телефон клиента: ' . $_POST['telefono'] . '</p>
                          
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers = "From:<maggotundead@gmail.com>\r\n";
    mail($to, $subject, $message, $headers);        

?>