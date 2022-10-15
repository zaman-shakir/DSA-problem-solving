<?php


function romanToInt($s) {
    $romanArr = array(
        "I"=>1,
        "V" =>5,
        "X" =>10,
        "L" =>50,
        "C" =>100,
        "D" =>500,
        "M" =>1000,
    );

    //$sArr = str_split($s);
    $res = 0;
    for($i=0 ; $i<strlen($s); $i++){

        //var_dump($variable);
        if(isset($s[$i+1]) && $romanArr[$s[$i]] < $romanArr[$s[$i+1]] ){
            $res -= $romanArr[$s[$i]];

        }
        else{
            $res += $romanArr[$s[$i]];

        }
    }
    return $res;
}

var_dump(romanToInt("MCMXCIV"));


