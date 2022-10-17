<?php


function isPalindrome($x){

    if($x < 0) return false;

    $copied = $x ;

    $reversed = 0;

    while($copied > 0){

        $digit = $copied % 10;

        $reversed = ($reversed*10) + $digit ;

        $copied = (int) ($copied / 10 );
    }

    if($reversed == $x) return true;
    return false;
}

var_dump(isPalindrome(1221));



?>
