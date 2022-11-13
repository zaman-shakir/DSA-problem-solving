<?php
/* *
 * @params String $s
 * @return String
*/
function removeDuplicates(String $s):string {
    $status = true;
    //$s = str_split($s);
    $sd ="";
    while($status){
        $status = false;
        $arr =[];
        for($i=0; $i< strlen($s); $i++){
            //var_dump("--",$i,"--");
            if(empty($arr)){
                $arr[] = $s[$i];
            }
            else{
                if(end($arr) == $s[$i]){
                    $status  = true;
                    array_pop($arr);
                }
                else{
                    $arr[] = $s[$i];
                }
            }
        }
        $s = implode("",$arr);

    }
   // var_dump($arr);
    return $s;
}

$s = "abbaca";
//$s = "a";
//$s = "azxxzy";
$ret = removeDuplicates($s);
var_dump($ret);



