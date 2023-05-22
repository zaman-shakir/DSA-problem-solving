<?php
$arr = [0,3,2,1];
$arr = [3,5,5];

 /**
     * @param int[] $arr
     * @return Boolean
     */
    function validMountainArray($arr):bool {

        if(count($arr)<3) return false;
        $c = 0;
        // check for incresing
        for($i=0; $i<count($arr); $i++){
            if($arr[$i] < $arr[$i+1]){
                $c++;
            }
            else{
                break;
            }
        }
        if($c == count($arr) ) return false;

        // check for d cresing
        for($i=$c; $i<count($arr)-1; $i++){
            if( isset($arr[$i+1]) &&  $arr[$i] > $arr[$i+1]){

                $c++;
            }
            else{
                break;
            }
        }

        return $c === count($arr)-1;

        //return true;
    }



    var_dump(validMountainArray($arr));




?>
