<?php

    $nums =  [0,0,1,1,1,2,2,3,3,4];

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $length = count($nums);
        $right = 0;
        for ($i = 1; $i < $length; $i++) {

            if($nums[$i] != $nums[$right]){
                $right++;
                $nums[$right] = $nums[$i];

            }
        }
    }


    removeDuplicates($nums);

    print_r($nums);
