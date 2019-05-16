<?php 
$str = 'Hello my der friend!';
$mass= ['Satbergen', 'Nurdaulet'];

$res = explode(' ', $str);
$res2 = explode(' ', $str, 2);

$res3 = implode(' ', $mass);
$res4 = join(' ', $mass);

print_r($res4);
