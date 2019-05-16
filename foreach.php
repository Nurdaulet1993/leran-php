<?php error_reporting(-1);

    $arr = ['Ivanov', 'Petrov', 5 => 'Sidorov'];
    $arr[] = 'Ronaldo';
    $names = [
        'Ivan' => 'Petrov',
        'Petya' => 'Danolov',
    ];

    // print_r($arr);

    // for($i = 0; $i < count($arr); $i++){
    //     echo $arr[$i] .'</br>';
    // }

    foreach($arr as $item){
        echo $item .'</br>';
    }

    foreach($names as $name){
        echo $name .'</br>';
    }

    foreach($names as $key => $name){
        echo $key .'</br>';
    }

    $a = 6;
    
    if($a == 5 || $a == 10 ){
        echo 'ok';
    }

?>