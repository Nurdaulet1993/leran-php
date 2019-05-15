<?php
    echo 'Hello PHP</br>';
    print 'Hello again PHP';

    $a = 25;
    $text = 'Hello World!</br>';
    $name = 'Nurdaulet';
    $fruit = 'aple';
    $sentence = "I have 2 {$fruit}s";  /** С помошью фигурных скобок мы говорим что это непеременная и можем после добавльят текст */
    $pageTitle = "My php practice $name $text";
    $price = '25$';
    $Price = '78$';

    /** Два способа создания констант "Константы нельзя оборачивать в двойные кавычки" */
    define("PAGE", "New page!" );   // Поддерживается всеми версиями PHP
    const PAGE2 = 78;               // Поддерживается версиями выше 5.3 используется в основном ООП

    echo $a .'</br>';
    echo $text .'</br>';
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
    <h1><?php echo $a .' '. $name ?></h1>
    <p><?php echo $Price ?></p>
    <p><?php echo $sentence ?></p>
    <p><?php echo PAGE ?></p>
    <p><?php echo PAGE2 ?></p>
</body>
</html>