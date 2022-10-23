<?php

function findErrorNums($nums){

    $hashmap = [];
    $len = count($nums);
    $sum=0;
    $total = ($len*($len+1)) / 2;

    for($i= 0; $i < $len; $i++){
        if(array_key_exists($nums[$i],$hashmap)){
            $dup = $nums[$i];
        }
        else{
            $hashmap[$nums[$i]] = true;
            $sum += $nums[$i];
         }
    }

    return [$dup,$total-$sum];

}




$nums = [1,2,2,4];
$nums = [2,2];
var_dump(findErrorNums($nums));

?>
