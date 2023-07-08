<?php
/**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $length = $m+$n-1;
        $mp = $m-1;
        $np = $n-1;

        while($mp >0 && $np > 0){

            $num = $nums1[$mp] > $nums2[$np] ? $nums1[$mp--] : $nums2[$np--];
            $nums1[$length--] = $num;

        }
        var_dump($nums1,$mp,$np);




    }

    $nums1 = [1,2,3,0,0,0];
    $m = 3;
    $nums2 = [2,5,6];
    $n = 3;
    $nums1 = [2,4,6,0,0,0];
    $m = 3;
    $nums2 = [1,3,5];
    $n = 3;

merge($nums1, $m, $nums2, $n);
