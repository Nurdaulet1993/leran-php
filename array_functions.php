<?php
    $mass = ['Ronaldo', 'Messi', 'Mbape'];
    $mass2 = ['Ronaldo', 'Messi', 'Mbape', 'Liverpool'];
    $mass3 = [
        'first' => 'Liverpool',
        'second' => 'Totenham',
    ];
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

    echo count($mass);              /**Количество элементов массива */
    echo count($goods, true);       /**Количество элементов массива и подмассива */

    $res = array_diff($mass2, $mass);  /**Возвращает новый массив из элементов первого массива которые отсутсвуют во втором */
    $res2 = array_intersect($mass2, $mass); /**Возвращает совпадающие по значению элементы в двух массивах */
    $res3 = array_key_exists('first', $mass3); /**Возвращает true или false проверка существования ключа в массиве */
    $res4 = array_keys($mass3);                /**Возвращает новый массив из ключей заданного массива */
    $res5 = array_values($mass3);                /**Возвращает массив из значении  элементов заданного массива */
    $res6 = array_merge($mass, $mass3);            /**Обьединение массивов перезаписмывает элементы с одинаковыми ключами первое значение удаляется */
    $res7 = $mass + $mass3;
    $res8 = array_rand($mass2, 2);                  /**Рандомно берет ключи элементов массива в количестве заданном во втором параметре */
    $res9 = array_reverse($mass2, true);            /** Переворачивает массив если true сохраняет расположение ключей */
    
    $name = 'Nurdaulet';
    $last_name ='Satbergen';

    $mass4 = compact('name', 'last_name');          // Создает массив находит переменные совпадающие

    $mass5 = [
        'killer' => 'Ben',
        'evidence' => 'gun',
    ];

    extract($mass5);                                 // Извлекает ключи массива и делает их переменными

    echo '<pre>';
    print_r($killer);
    echo '</pre>';
?>

<!-- 
Изучить пойже    
array_combine
array_search
array_shift
array_unique
array_unshift
array_flip
array_pop
array_push
in_array
list -->