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
    // if(empty($arr)){
    //     return false;
    // }
    // if(count($arr) == count(array_flip($arr))){
    //      return true;
    // }
    // else return false;

    /**
     * Soluttion 2
     * Strat
    */
    $new_arr =[];
    foreach($arr as $a ){
        if(isset($new_arr[$a]))
        {
            $new_arr[$a] = false;
            return false;
        }

        else $new_arr[$a] = true;
     }
     return true;
}
$arr = [1,2,3,4,5,6,7,8,8,9,9,7,3,2];
$arr = [9,7,4,6];
$arr = ['a','c','d','h','a'];
//$arr = ['a','c','d','h'];
var_dump(is_unique($arr));
