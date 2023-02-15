<?php
 function balancedStringSplit($s) {
        $count = 0;
        $sum = 0;
        for($i=0; $i< strlen($s); $i++){
            $val = $s[$i] === "R" ? 1 : -1;
            $sum += $val;
            if($sum == 0) {
                $count++;
                $sum =0;
            }
        }
        return $count;
    }

$s =  "RLRRRLLRLL";

var_dump(balancedStringSplit($s));

?>
