<?php
    $arr = array(1, 4, 6, 'Damir', 'Rasul');
    $mass = ['Ronaldo', 'Messi', 'Mbape', ['Real Madrid', 'Barselona', 'PSG']];
    var_dump($arr);
    echo $arr[4] .'</br>';
    echo $mass[0];
    echo $arr{3};
    print_r($mass);

    echo $mass[3][0];


    $arr2 = 
        [2 => 'Totenham', 
        3 => 'ManCiti', 
        'Juventus', 
        'Chelsee',
    ];
    print_r($arr2);

    /**Ассоциативный массив */
    $goods = [
        [
            'title' => 'Iphone',
            'price' => 200,
            'desc' => 'Best price'
        ],
        [
            'title' => 'Ipad',
            'price' => 300,
            'desc' => 'Good solution for home enjoing'
        ]
    ];

    echo "<pre>";
        print_r($goods);
    echo "</pre>";

    echo $goods[0]['title'] .' '. $goods[0]['price'];
?>