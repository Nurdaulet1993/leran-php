<?php 
    $title = 'My site';
    $my_text = '';
    $light = 'red';

    if($light == 'green'){
        echo 'GREEN';
    }elseif($light == 'red'){
        echo '<p>RED</p>';
    }

    var_dump((bool) 1);  // Приводится в булевое значение
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
    <?php 
        if($my_text){
            echo "$my_text true";
        }else {
            echo 'Hello';
        }
    ?>
</body>
</html>