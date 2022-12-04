<?php

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumAverageDifference($nums) {

        for($i=1; $i<count($nums); $i++){
            $nums[$i] += $nums[$i-1];
        }
        $position = 0;
        $min = PHP_INT_MAX;
        $len = count($nums);
        for($i=0; $i<$len; $i++){
            $left = floor($nums[$i] / ($i+1)) ;
            if($i !== $len-1){
                $right = floor(($nums[$len-1] - $nums[$i]) / ($len-1-$i));
            }
            else $right =0;
            $tmp = abs( $left  - ($right));
            if(  $tmp  < $min  ) {
                $min = $tmp;
                $position = $i;
            }
        }
        return $position;

    }
    $nums = [2,5,3,9,5,3];
    var_dump(minimumAverageDifference($nums));
