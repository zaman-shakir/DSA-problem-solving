<?php

/**
 * @param int[] $nums
 * @return bool
 */
function canJump(array $nums): bool {

    $goal = count($nums)-1;

    for($i = count($nums)-1; $i >= 0; $i--) {

        if($i + $nums[$i] >= $goal){
            $goal = $i;
        }

    }

    return $goal==0 ;
}

$nums = [2,3,1,1,4]; // true
//$nums = [3,2,1,0,4]; // false

var_dump(canJump($nums));
