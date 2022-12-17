<?php
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $max = 0;
        $left = 0;
        $right = count($height)-1;
        while( $left < $right ){

            $max = max( min($height[$left], $height[$right]) * ($right-$left) , $max );

            if($height[$left] < $height[$right])  $left++;

            else $right--;

        }
        return $max;
    }

