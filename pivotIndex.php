<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sum = array_sum($nums);
        $left = 0;
        for($i=0; $i<count($nums); $i++){
            if($left === ($sum - $left - $nums[$i])) return $i;

            $left += $nums[$i];
        }
        return -1;

    }
}

?>
