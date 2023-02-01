<?php

$str1 = "ABCABC"; $str2 = "ABC";
// ABC
$str1 = "ABABAB"; $str2 = "ABAB";
// ABC

/**
 * @param String $str1
 * @param String $str2
 * @return String
 */
function gcd($x,$y){
    while ($x != $y) {
    if ($x > $y)
        $x = $x - $y;
    else
        $y = $y - $x;
    }
    return $x;
}
function gcdOfStrings($str1, $str2) {
        $m = strlen($str1);
        $n = strlen($str2);
        if($str1.$str2 !== $str2.$str1) return "";


        return substr($str1, 0, $this->gcd($m,$n));

}

var_dump(gcdOfStrings($str1,$str2));
