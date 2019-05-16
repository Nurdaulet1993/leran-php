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
    $arr2[] = 'Bayern Munich';  /**Добавление элемента в конец массива */
    $arr2[15] = 'Liverpool';  /**Добавление элемента массива в определенную позицию если дать позицию с уже имеющим элементом то он будет перезаписан*/
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

    // echo $goods[0]['title'] .' '. $goods[0]['price'];

    $i = 0;
    while($i < 2){
        echo $goods[$i]['title'] .' '. $goods[$i]['price'];
        echo '</br>';
        $i++;
    }
?>