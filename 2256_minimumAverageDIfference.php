<?php

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumAverageDifference($nums) {
        /**
            //Approach 1
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
        **/
        /**
            //Approach 2
                $sum = array_sum($nums);
                $lastIndex = count($nums)-1;
                $min = PHP_INT_MAX;
                $left = 0 ; $right = $sum;
                for($j=0; $j<= $lastIndex; $j++){
                    $left += $nums[$j];
                    $right -= $nums[$j];

                    if($j == $lastIndex) $average = abs(floor($left/$j+1) );
                    else $average = abs( floor($left/$j+1) - floor($right/$lastIndex-$j) );

                    if($average < $min){
                        $index = $j;
                        $min = $average;
                    }

                    return $index;


                }



            }
        */
    $nums = [2,5,3,9,5,3];
    var_dump(minimumAverageDifference($nums));
