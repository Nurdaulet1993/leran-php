<?php

function findMax($arr = [4, 10, 12, 3]){
    if(is_array($arr)){
        $max = 0;

        for($i = 0; $i < count($arr); $i++){
            if($max < $arr[$i]) $max = $arr[$i];
        }

        return [$max, $min];
    }else{
        echo 'Not array';
    }
    
}

function sum(&$a, $b){
    $a += $b;
}