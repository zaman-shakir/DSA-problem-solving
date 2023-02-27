<?php

  /**
     * @param int[] $nums
     * @return int
     */
    function findTheArrayConcVal($nums) {

        $left = 0;
        $right = count($nums)-1;
        $sum = 0;

        while($left <= $right){
            if($left != $right){
                $tmp = $nums[$left]."".$nums[$right];
            }
            else{
                $tmp = $nums[$left];
            }
            $sum += $tmp;
            $left++;
            $right--;

        }
        return $sum;
    }

$nums = [5,14,13,8,12];
//$nums = [7,52,2,4];

var_dump(findTheArrayConcVal($nums));
