<?php

/**
 * @param Integer[] $temperatures
 * @return Integer[]
 */
// function dailyTemperatures($temperatures) {
//     $ans = [];
//     $len = count($temperatures);
//     for($i=0; $i< $len; $i++ ){
//         $distance = 0;
//         for($j=$i; $j<$len; $j++){
//             if($temperatures[$i] < $temperatures[$j] ) {
//                 $distance = $j-$i;
//                 break;
//             }
//         }
//         $ans [] = $distance;
//     }

//     return $ans;
// }
function dailyTemperature($temperatures){

    $stack = new SplStack();
    $output = [];

    for($i=0; $i<count($temperatures); $i++ ){

        while(!$stack->isEmpty() && $temperatures[$i] > $temperatures[$stack->top()]  ){

            $output[ $stack->top()] = $i- $stack->top();
            $stack->pop();
        }

        $output[$i] = 0;
        $stack->push($i);

    }

    return $output;

}
$temperatures = [73,74,75,71,69,72,76,73];
var_dump(dailyTemperature($temperatures));
