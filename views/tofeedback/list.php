<?php
$filename = '/var/www/html/yii/json/list.json';
$str = fopen($filename, "r");
$json = fread($str, filesize($filename));
fclose($str);
$json = json_decode($json);
var_dump($json);
