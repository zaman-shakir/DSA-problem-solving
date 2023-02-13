<?php
$nums = [1,3,5,6]; $target = 2;
$nums = [1,3,5,6]; $target = 5;
//$nums = [1,3,5,6]; $target = 7;



function searchInsert($nums, $target){

    $left = 0;
    $right = count($nums)-1;
    while($left <= $right){
        $mid = (int)(($left+$right)/2) ;

        if($nums[$mid] == $target) { return $mid; }

        if($nums[$mid] < $target){
            $left = $mid+1;
        }
        else{
            $right = $mid-1;
        }
    }

    return $left;
}

var_dump(searchInsert($nums, $target));
