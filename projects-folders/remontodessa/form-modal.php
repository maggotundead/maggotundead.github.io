<?php

    $to='maggotundead@gmail.com';
    $subject = 'Новая заявка на стоимость ремонта Start Remont';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>

                        <p>Имя клиента: ' . $_POST['user_name'] . '</p>

                        <p>Телефон клиента: ' . $_POST['user_phone'] . '</p>

                        <p>Почта клиента: ' . $_POST['user_mail'] . '</p>

                        <p>Уровень ремонта: ' . $_POST['repair_type_value'] . '</p>

                        <p>Тип жилья: ' . $_POST['property_type_value'] . '</p>

                        <p>Площадь квартиры: ' . $_POST['property_rooms_square'] . '</p>

                        <p>Количество комнат: ' . $_POST['property_rooms_value'] . '</p>

                        <p>Помещение 1: ' . $_POST['living_rooms'] . '</p>
                        <p>Помещение 2: ' . $_POST['kitchen'] . '</p>
                        <p>Помещение 3: ' . $_POST['bathroom'] . '</p>
                        <p>Помещение 4: ' . $_POST['balcony'] . '</p>

                        <p>Дополнительная услуга 1: ' . $_POST['design_project'] . '</p>
                        <p>Дополнительная услуга 2: ' . $_POST['electric_project'] . '</p>
                        <p>Дополнительная услуга 3: ' . $_POST['radiators_replacement'] . '</p>
                        <p>Дополнительная услуга 4: ' . $_POST['windows_replacement'] . '</p>
                        <p>Дополнительная услуга 5: ' . $_POST['entrance_door_replacement'] . '</p>
                        <p>Дополнительная услуга 6: ' . $_POST['conditioner_installation'] . '</p>

                        <p>Расположение объекта: ' . $_POST['property_location_value'] . '</p>
                          
                    </body>
                </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Start Remont  <maggotundead@gmail.com>\r\n";
    mail($to, $subject, $message, $headers);        

?>
