<?php
 /**
 * @param Integer $n
 * @return Integer
*/
function numTilings($n): Int
{

    $module = pow(10,9);
    $module += 7;

    $ans[0] = 0;
    $ans[1] = 1;
    $ans[2] = 2;
    $ans[3] = 5;
    for($i=4; $i<=$n; $i++) {
        $ans[$i] = ((2 * $ans[$i-1]) + $ans[$i-3]) % $module;
    }

    return $ans[$n] ;

}





$input = 3; // 5
$input = 1; // 1
$input = 2; //2
$input = 4; //11
$input =5;
$input = 60; // 882347204

var_dump(numTilings($input));
