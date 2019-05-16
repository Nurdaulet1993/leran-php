<?php 
$str = 'Hello my der friend!';
$mass= ['Satbergen', 'Nurdaulet'];

/**Созлает массив из текста */
$res = explode(' ', $str);
$res2 = explode(' ', $str, 2);

/**Обьединяет в массив текст */
$res3 = implode(' ', $mass);
$res4 = join(' ', $mass);

print_r($res4);

$str2 ="jhjhj\nllklkl\n";
echo nl2br($str2);
$str3 ='Нурдаулет';
echo mb_strlen($str3);