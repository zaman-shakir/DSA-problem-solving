<?php

use PhpParser\Node\Expr\Cast\Array_;

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares(Array $nums):Array {
        for($i=0; $i<count($nums); $i++){
            $nums[$i] = $nums[$i] * $nums[$i];
        }
        sort($nums);
        return $nums;
    }
        /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares_optimized(Array $nums):Array {
        for($i=0; $i<count($nums); $i++){
            $nums[$i] = $nums[$i] * $nums[$i];
        }
        $len = count($nums)-1;
        $tail = count($nums) -1;
        $head = 0;
        $ans = [];
        while($head <= $tail){
            if($nums[$head] > $nums[$tail]){
                $ans[$len] = $nums[$head];
                $head++;
                $len--;
            }
            else{
                $ans[$len] = $nums[$tail];
                $tail--;
                $len--;
            }

        }
        ksort($ans);
        return $ans;

    }
    $nums = [-7,-3,2,3,11];
    var_dump(sortedSquares_optimized($nums));

?>
