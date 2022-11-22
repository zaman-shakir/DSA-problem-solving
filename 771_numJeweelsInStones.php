<?php
/**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $ans = 0;
        for($i =0; $i<strlen($jewels); $i++){
            for($j=0; $j<strlen($stones); $j++){
                if($jewels[$i] == $stones[$j]) $ans++;
            }
        }
        return $ans;
    }
