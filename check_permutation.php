<?php
/**
 * @author  shakir
 * @brief   compare two string , if both are palindrome each other
 *
 * @param   $str1   first string
 * @param   $str2   second string
 *
 * return   true    if the given two string is palindrome
 * return   false   if the given two string is not palindrome
 */

function CheckPermutation(string $str1 = "", string $str2 = ""): bool
{
    if(strlen($str1) == strlen($str2) && strlen($str1) == 0) return false;
    #Solution1  sort string then compare
    $str1 = str_split($str1);
    // sort($str1);

    $str2 = str_split($str2);
    // sort($str2);

    // for($i= 0 ; $i < count($str1); $i++){

    //     if($str1[$i] !== $str2[$i]) return false;
    // }

    // return true;

    #Solution2 compare without string

    $char_array = [];

    for($i =0 ; $i < count($str1); $i++ ){
        if(!array_key_exists($str1[$i], $char_array)){
            $char_array[$str1[$i]] = 1;
        }
        else{
            $char_array[$str1[$i]]++;
        }
    }
    //var_dump($char_array); die();
    for($i =0 ; $i < count($str2); $i++ ){
        if(!isset($char_array[$str2[$i]])){
            return false;
        }
        else{
            if($char_array[$str2[$i]] > 0){
                $char_array[$str2[$i]]--;
            }
            else{
                return false;
            }
        }
    }

    return true;
}

$str1 = "CDEHLLO";
$str2 = "CDEHLOL";
//$str2 = "CDEHOLr";
var_dump(CheckPermutation($str1, $str2));
