<?php

function oneAway(string $str1, string $str2):bool{

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 == $len2){

        //replacement
        $found_position = false;
        for($i = 0; $i<$len1; $i++){
            if($str1[$i] !== $str2[$i] ){

                if($found_position) break;
                $str2[$i] = $str1[$i];
                $found_position = true;

            }
        }

    }elseif($len1 + 1 == $len2){
        //deletion
    }elseif($len1 == $len2 + 1){
        //insertion
    }


    return false;
}

var_dump(oneAway("pale","ple"));
var_dump(oneAway("pales","pale"));
var_dump(oneAway("pale","bale"));
var_dump(oneAway("pale","bae"));

