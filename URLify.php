<?php

/**
 * @author  shakir
 * @brief   replace space by %20
 *
 * @param   $str    string
 * @param   $count   count
 *
 * return   string
*/

function URLify(string $str, int $len = null): string{

    /// position of the last character except space
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        if ($str[$i] !== ' ') {
            break;
        }
    }

    //$space_count =

    $j = $length - 1;

    while($i >= 0){
        if($str[$i] == " "){
            $str[$j--] = "0";
            $str[$j--] = "2";
            $str[$j--] = "%";
        }
        else{
            $str[$j--] = $str[$i];
        }
        $i--;
    }
    //var_dump($i); die();
    return $str;
}
$str = "Mr John Smith";
var_dump(URLify($str,13));
