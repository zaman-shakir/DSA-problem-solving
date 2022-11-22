<?php
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {

        $hash = array_fill(0,101,0);
        $ans = [];

        foreach($nums as $num){
            $hash[$num]++;
        }

        for($i=1; $i<count($hash);$i++){
            $hash[$i] += $hash[$i-1];
        }
        print_r($hash);
        foreach($nums as $n){
            if($n == 0) $ans[] = 0;
            else{
                $ans[] = $hash[(int)$n-1];
            }
        }
        return $ans;

    }

    $input = [8,1,2,2,3];
    $input = [5,0,10,0,10,6];
    $res = smallerNumbersThanCurrent($input);
    var_dump($res);
