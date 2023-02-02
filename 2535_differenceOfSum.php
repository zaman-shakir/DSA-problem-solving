<?php

   /**
     * @param int[] $nums
     * @return int
     */
    function differenceOfSum($nums) {

        $esum =0;
        $dsum = 0;

        foreach($nums as $n){

            $esum += $n;

            while($n > 0){
                $dsum += $n % 10;
                $n = floor($n / 10);

            }

        }

        return abs($esum - $dsum);


    }

    $nums = [1,15,6,3];
    $nums = [1,2,3,4];
    var_dump(differenceOfSum($nums));
