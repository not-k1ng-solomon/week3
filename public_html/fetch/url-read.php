<?php
$data =$_POST;
$fp = fopen('url-name.txt', 'rt');
$test = fwrite($fp, $data['url']);
fclose($fp);
echo "запись выполнена";
