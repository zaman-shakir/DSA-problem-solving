<?php
/*
function hasUnique($str,$i,$k){

    $hash = [];
    for($n=$i ; $n<= $k ; $n++){
        if(array_key_exists($str[$n],$hash)){
            return false;
        }else{
            $hash[$str[$n]] = true;
        }
    }
    return true;

}

function longestUniqueSubsttr($str){
    $max = 0;
    for($i=0; $i<strlen($str); $i++){

        for($j=$i; $j<strlen($str); $j++){

            if(hasUnique($str,$i,$j)){
                $max = max($max, $j-$i+1);
            }
        }

    }
    return $max;
}

*/
function longestUniqueSubsttr($s){
    $len = strlen($s);
    if($len == 0) return 0;
    if($len == 1) return 1;
    $hash = [];
    $maxLength = 0;
    $start = 0;
    for($i=0; $i<$len; $i++){
        $char = $s[$i];
        if(array_key_exists($char,$hash)){
            $start = max($start, $hash[$char]+1);
        }
        $hash[$char] = $i; // set/override current position
        $maxLength = max($maxLength, $i-$start+1);
    }
    return $maxLength;

}
$str = "geeksforgeeks";
$str = "abcabcbb";
$str = "au";
var_dump(longestUniqueSubsttr($str));


