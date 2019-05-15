<?php
/**Переменные типа boolean TRUE/True/true и FALSE/False/false  регистра независимые */
   $is_run = true;
   $is_jump = false;
   var_dump($is_jump); /**Функия для отладки кода показывает структурированные данные переменных и выражении */
   echo gettype($is_run);  /**gettype - функция возвращает тип переменной */

/**Переменная типа integer целое число */
   $num = 123;
   $str = '22';
   echo $str + 10;  /**Если прибавлять строковый тип который смысловом значении числ " $str = 22" и число то оно преобразутся в число и происходит сумирование  */

/**Переменная типа float - дробное число или с плавающей точкой */
    $float = 1.2;
    var_dump($float);
/**Переменные типа string - строковое значение  использование двойных кавычек позволяет к значению прибавлять переменную а так же использовать одинарные кавычки*/
    $last_name ='Satbergen';
    $full_name ="Nurdaulet {$last_name}";
    $speech = 'I\'m the best programmer of the world!'; /**Экранирование с помошью обратного слэша "\" теперь внутрення одинарная кавычка не является закрывающей */
    $sppech2 ="Hello my \"dear\" friend";
    echo $speech;
    var_dump($full_name);
    // HEREDOC способ определения переменной string
    $str4 = <<<HERE
        This 'is' "string". $full_name
HERE;
    // NOWDOC способ определения переменной string здесь не выводит значение переменных
$str5 = <<<'HERE'
        This 'is' "string". $full_name
HERE;
    echo $str4;
    echo $str5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
    <?php echo $is_jump ?>
</body>
</html>