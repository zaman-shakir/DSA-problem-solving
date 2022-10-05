<?php
/**
** Is Unique
** Implementa an algorithm to determine if a string has all Unique characters . Whast id you cannnt use additional dara structures?
** return true if array unique
*/


function is_unique(array $arr =[]){
   /**
    * Solution 1
    * Starts
    */
    if(empty($arr)){
        return false;
    }
    if(count($arr) == count(array_flip($arr))){
         return true;
    }
    else return false;


}
$arr = [1,2,3,4,5,6,7,8,8,9,9,7,3,2];
$arr = [9,7,4,6];
var_dump(is_unique($arr));
