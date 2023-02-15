<?php
$matrix = [[1,4,7,11,15],[2,5,8,12,19],[3,6,9,16,22],[10,13,14,17,24],[18,21,23,26,30]];
$target = 5;

function searchMatrix($matrix, $target) {
   $m = count($matrix);

   for($i=0; $i<$m; $i++) {
        $n = count($matrix[$i]);
        if($matrix[$i][0] <= $target  || $matrix[$i][$n-1] >= $target  ){
            for($j=0; $j<$n; $j++) {
                if($matrix[$i][$j])
                if($matrix[$i][$j] == $target) return true;
            }
        }
       

   }
   return false;
}


var_dump(searchMatrix($matrix, $target));
