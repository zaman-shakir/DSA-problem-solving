<?php

// function findDisappearedNumbers(array $nums):array{

//     $res = array_fill_keys(range(1,count($nums)), 0);
//     foreach($nums as $key=>$value){
//         unset($res[$value]);
//     }
//     return $res;

// }
function findDisappearedNumbers($nums) {
    $n = count($nums);

    // Step 1: Mark elements as negative
    for ($i = 0; $i < $n; $i++) {
        $index = abs($nums[$i]) - 1;
        $nums[$index] = -abs($nums[$index]);

        var_dump($index,abs($nums[$index]),$nums);
    }

    // Step 2: Find missing numbers
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] > 0) {
            $result[] = $i + 1;
        }
    }

    return $result;
}


$nums = [4,3,2,7,8,-2,3,1];
var_dump(findDisappearedNumbers($nums));
