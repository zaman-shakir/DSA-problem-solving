<?php
$nums = [2, 7, 11, 15];
$target = 9;


/*
* algorithm
* $d = 7 /f
* $map[2] = 0;
* $d = 2;/t

*/


function twoSum($nums, $target)
{
    $map = [];
    for ($i = 0; $i < count($nums); $i++) {

        $diff = $target - $nums[$i];

        if (array_key_exists($diff, $map)) {

            return [$map[$diff], $i];
        } else {
            $map[$nums[$i]] = $i;
        }
    }
}

$ans = twoSum($nums, $target);
var_dump($ans);
