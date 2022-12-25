<?php

class Solution {

    /**
     * @param Int[] $nums
     * @param Int[] $queries
     * @return Int[]
     */
    function answerQueries($nums, $queries) {
        $ans = [];
        sort($nums);
        for($i=1; $i< count($nums); $i++) {
            $nums[$i] += $nums[$i-1];
        }
        foreach($queries as $q){
            $count = 0;
            foreach($nums as $n){
                if($n > $q) break;
                $count++;
            }
            $ans[] = $count ;
        }
        return $ans;
    }
}

$nums = [4,5,2,1]; $queries = [3,10,21]; // [2,3,4]
//$nums = [2,3,4,5]; $queries = [1]; // [0]

$sol = new Solution();
var_dump($sol->answerQueries($nums, $queries));
