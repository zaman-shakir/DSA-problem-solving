<?php

$numRows = 5;

function generate($numRows){
   var_dump("----"); die();
    $arr = [];
    for($i = 0; $i < $numRows; $i){

        $arr[$i][0] = 1;

        for($j=1; $j <$i; $j++ ){

            $arr[$i][$j] = $arr[$i-1][$j-1] + $arr[$i-1][$j];

        }
    }

   return $arr;
}
var_dup("kk"); die();
var_dump(generate($numRows));
