<?php

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $hash = [];
        $res = 0;
        foreach($nums as $num){

            if(array_key_exists($num,$hash)){

                $res = $res + $hash[$num];

                $hash[$num]++;
            }else{
                $hash[$num] = 1;
            }

        }
        return $res;
    }

    $input = [1,2,3,1,1,3];
    $res = numIdenticalPairs($input);
    var_dump($res);

?>
