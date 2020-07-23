<?php
// echo $_SERVER['DOCUMENT_ROOT'];

$my_file = '../access/'.$_SERVER['REMOTE_ADDR'];
$handle = fopen($my_file, 'r');
$data = '';
$data = fread($handle,filesize($my_file));
// в файле strtotime($data)
// текущая time()
// в файле < текущая = показываем ошибку
// в файле > текущая = показываем контент
if ( (strtotime($data) < time()) or ( $data == '' ))
    {
        echo 'acces denied';
        header('Location: https://demo-lookincasino.com/', true, 302);
        die;
    }
/*
    echo "  |  ";
    echo strtotime($data);
    echo "  <  ";
    echo time();