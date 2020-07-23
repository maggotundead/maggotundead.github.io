<?php
$ip_filename = $_SERVER['REMOTE_ADDR'];
$handle = fopen($ip_filename, 'w') or die('Cannot open file:  '.$ip_filename); //implicitly creates file

$fp = fopen($ip_filename, "w+");
ftruncate($fp, 0);
$text_to_file = date('Y-m-d H:i:s', strtotime("+1 hours"));
fwrite($fp, $text_to_file);
fclose($fp);
unset($fp);

header('Location: https://demo-lookincasino.com/home/', true, 302);
/*
$date_string = '2020-01-07 00:59:05';
$adv_enabled = true;
if ($adv_enabled)
{
    if (strtotime($date_string) < time()) echo 'Время наступило!';
    else echo 'Час еще не пришел';
}
else echo 'Увы, конкурсов нет';

echo ' | ';
echo strtotime($date_string);
echo ' | ';
echo time();
echo ' | ';
echo date('Y-m-d H:i:s');
echo ' | ';
echo date('Y-m-d H:i:s', strtotime("+1 hours"));






/*
$ip_filename = $_SERVER['REMOTE_ADDR'];
//$my_file = 'file.txt';
$handle = fopen($ip_filename, 'w') or die('Cannot open file:  '.$ip_filename); //implicitly creates file

$date_string = '2020-01-07 00:59:05';
$adv_enabled = true;
if ($adv_enabled)
{
    if (strtotime($date_string) < time()) echo 'Время наступило!';
    else echo 'Час еще не пришел';
}
else echo 'Увы, конкурсов нет';

echo ' | ';
echo strtotime($date_string);
echo ' | ';
echo time();
echo ' | ';
echo date('Y-m-d H:i:s');
echo ' | ';
echo date('Y-m-d H:i:s', strtotime("+1 hours"));
 */