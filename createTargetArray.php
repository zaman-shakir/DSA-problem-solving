<?php

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $ans = [];
        for($i=0; $i<count($index); $i++){
            if(!isset($ans[$index[$i]])){
                $ans[$index[$i]] = $nums[$i];
            }
            else{
                //get current index
                // get ans count
                // move items in one place right
                $curIndex = $index[$i];
                $len = count($ans);
                for($j = $len; $j > $curIndex; $j-- ){
                    $ans[$j] = $ans[$j-1];
                }
                $ans[$curIndex] = $nums[$i];
            }
        }
        return $ans;
    }
    $nums = [0,1,2,3,4];
    $index = [0,1,2,2,1];
