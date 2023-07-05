<?php

$nums = [0,1,0,3,12];

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {


        $pos = 0;
        foreach($nums as $key => $value) {
            if($value != 0 ){
                $nums[$pos++]   = $value;
            }
        }
        while($pos < count($nums)){
            $nums[$pos++] = 0;
        }
        return $nums;
    }


    $res = moveZeroes($nums);
    print_r($res);
