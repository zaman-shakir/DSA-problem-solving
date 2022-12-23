<?php
$prices = [7,1,5,3,6,4];
//$prices = [7,6,4,3,1];

function maxProfit($prices){
    $maxProfit = 0;

    $left = 0 ;
    $right = 0 ;

    while($right < count($prices)){

        if($prices[$right] - $prices[$left] < 0){
            $left = $right;
            $right = $left+1;
        }
        else{
            $maxProfit = ($prices[$right] - $prices[$left])> $maxProfit ? ($prices[$right]-$prices[$left]) : $maxProfit;
            $right++;
        }

    }
    return $maxProfit;

}


var_dump(maxProfit($prices));
