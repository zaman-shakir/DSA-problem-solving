<?php
$prices = [7,1,5,3,6,4];
$prices = [7,6,4,3,1];
$prices = [7,6,4,3,9,2,8,3,1];

function maxProfit1($prices){
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

function maxProfit2($prices) : int {

    $minPrice = PHP_INT_MAX;
    $profit = 0;

    foreach($prices as $key=>$price){



        if($price < $minPrice){
            $minPrice = $price;
        }
        elseif($price - $minPrice > $profit){
            $profit = $price - $minPrice;
        }

    }
    return $profit;

}


//var_dump(maxProfit1($prices));

$stockPrices = [7, 1, 5, 3, 6, 4];
$result = maxProfit2($prices);
echo "Max Profit (One Pass): " . $result;
