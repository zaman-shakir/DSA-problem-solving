<?php

function majorityElement($arr){
    if(count($arr) == 1 ) return $arr[0];

    $n = count($arr)-1;
    $hashmap = [];
    foreach($arr as $key => $value){

        if(array_key_exists($value,$hashmap)){

            $hashmap[$value]++;
            if($hashmap[$value] > $n/2 ){
                return $value;
            }
        }
        else{
            $hashmap[$value] = 1;
        }
    }
}

$arr = [1];
var_dump(majorityElement($arr));
