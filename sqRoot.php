<?php

/**
* @param x int find out square root of this

* @return ans int
*/
function sqRoot($x){

    $start =0 ; $end = floor($x/2); $ans = 0;

    if($x == 0  || $x == 1) {
        return $x;
    }

    while($start <= $end ){

        $mid = (int)(($start+$end)/2);
        if($mid * $mid == $x) return $mid;
        //var_dump("m",$mid,"s",$start,"e",$end,"\n");
        if($mid * $mid < $x){
            $start = $mid +1;
            $ans = $mid;
        }
        else{
            $end = $mid-1;
        }
    }
    return $ans;

}


var_dump("------\n",sqRoot(64));


?>
