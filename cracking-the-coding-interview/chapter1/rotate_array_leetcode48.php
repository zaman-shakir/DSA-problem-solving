<?php

$nums = [1,2,3,4,5,6,7]; $k = 3;
// [5,6,7,1,2,3,4]
// Explanation:
// rotate 1 steps to the right: [7,1,2,3,4,5,6]
// rotate 2 steps to the right: [6,7,1,2,3,4,5]
// rotate 3 steps to the right: [5,6,7,1,2,3,4]

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {

        for($i=0; $i<$k ; $i++){
            print_r($nums);
            array_unshift($nums, array_pop($nums) );
        }
        return $nums;
    }


    var_dump(rotate($nums, $k));

?>
