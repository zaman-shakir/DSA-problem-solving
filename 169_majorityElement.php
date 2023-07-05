<?php

$n = count($nums);
$hashmap = [];

foreach($nums as $key => $value){
    if(array_key_exists($value,$hashmap)){
        $hashmap[$value]++;
    }
    else{
        $hashmap[$value] = 1;
    }
    if($hashmap[$value] > $n/2 ){
        return $value;
    }
}
