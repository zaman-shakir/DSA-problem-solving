<?php

/**
 * 1
 * 1 1
 * 1 2 1
 * 1 3 3 1
 * 1 4 6 4 1
 */

function getPascalTriangle($numRow){

    $arr = [];

    for($i=0; $i<$numRow;$i++){

        $arr[$i][0] = 1;

        for($j=1; $j <= $i; $j++ ){
            if(isset($arr[$i-1][$j])){
                $arr[$i][$j] = $arr[$i-1][$j-1] + $arr[$i-1][$j];

            }
            else{
                $arr[$i][$j] = $arr[$i-1][$j-1];
            }
        }

    }
    return $arr;

}



var_dump(getPascalTriangle(8));
