<?php

function findDisappearedNumbers(array $nums):array{

    $res = array_fill_keys(range(1,count($nums)), 0);
    foreach($nums as $key=>$value){
        unset($res[$value]);
    }
    return $res;

}


$nums = [4,3,2,7,8,2,3,1];
var_dump(findDisappearedNumbers($nums));
