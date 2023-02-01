<?php
// Input: a = "1010", b = "1011"
// Output: "10101"
$a = "1010"; $b = "1011";

/**
 * @param string $a
 * @param string $b
 * @return string
 */
function addBinary(string $a, string $b): string{

    $sum = "";
    $carry = 0;
    $len_a = strlen($a) -1;
    $len_b = strlen($b) -1;

    while($len_a >= 0 && $len_b >= 0){

        $tmp = $a[$len_a--] + $b[$len_b--] + $carry;
        $carry = floor($tmp / 2);
        $sum = ($tmp % 2).$sum;
    }
    while($len_a >= 0){

        $tmp = $a[$len_a--]  + $carry;
        $carry = floor($tmp / 2);
        $sum = ($tmp % 2).$sum;
    }

    while( $len_b >= 0){

        $tmp =  $b[$len_b--] + $carry;
        $carry = floor($tmp / 2);
        $sum = ($tmp % 2).$sum;
    }
    if($carry){
        return "1".$sum;
    }
    return $sum;

}



var_dump(addBinary($a,$b));
