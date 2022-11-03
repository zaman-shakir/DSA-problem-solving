<?php
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


$str = "geeksforgeeks";
var_dump(longestUniqueSubsttr($str));


