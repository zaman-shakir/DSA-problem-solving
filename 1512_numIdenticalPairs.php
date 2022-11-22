<?php

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $ans = 0;
        $len = count($nums);
        for($i=0; $i<$len; $i++){

            for($j = $i+1; $j < $len && $i< $len-1; $j++){
                if($nums[$i] == $nums[$j]) $ans++;
            }

        }
        return $ans;
    }

    $input = [1,2,3,1,1,3];
    $res = numIdenticalPairs($input);
    var_dump($res);

?>
