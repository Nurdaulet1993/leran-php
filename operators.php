<?php
    /**Оператор возведения в степень первое число в срепень */
    echo 2**3 .'</br>';
    echo pow(2, 4);
    /**Оператор присвайвания по ссылке значение одно для обойх */
    $a = 4;
    $b = &$a;
    var_dump($a);

    echo "$a </br>";
    echo "$b </br>";
    $a = 8;

    echo "$a </br>";
    echo "$b </br>";
    // Инкрименты
    $num = 8; 
    echo $num++;
    echo $num;

    /**Оператор конкатенации - обьединение строк */
    $name = 'Nuradulet';
    $last_name = 'Satbergen';
    $full_name = $name .' '. $last_name;
    echo "</br> $full_name"; 
    /**Комбинированные операторы */
    $a += 4;
    $a *= 5;
    $sppech = "I'm the";
    $sppech .= 'programmer';
    echo "</br> $sppech";

    // NULL
        var_dump($var); // null
        $var = '';
        unset($var);  // Функция уничтожения переменной
        $var = NULL;
        $var++;
        var_dump($var);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>