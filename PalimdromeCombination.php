<?php
/**
 * @author  shakir
 * @brief   Checkif the sring is permutation of a palimdrome
 *
 *
 * @param   $str    string
 *
 * @return   true    if palindrome combination
 * @return  false   if not
 *
 * @version 1.0.0   Oct 7, 20222
*/

function palindromePermutation (string $str): bool{
    // remove non letter
    $char_map = [];
    $odd_count = 0;
    for($i=0; $i<strlen($str); $i++){
        $char = $str[$i];

        if($char === " ") continue;

        $char = strtolower($char);

        if( array_key_exists($char, $char_map)){
            $char_map[$char]++;
        }
        else{
            $char_map[$char] = 1;
        }
    }
    foreach($char_map as $key=>$count){

        if($count % 2 != 0 && ++$odd_count > 1 ){
            return false;
        }
    }

    //var_dump($str);
    return true;
}

var_dump(palindromePermutation("aaccde"));
