<?php
    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        $ans =[];
        foreach($candies as $candy){
            $ans[] = ($candy+$extraCandies) < $max ? false: true;
        }
        return $ans;
    }

