<?php


$nums = [4,3,2,7,8,2,3,1];

$nums = array_unique($nums);
$length = count($nums);
sort($nums);

$nums2 = range($nums[0],$nums[$length-1]);

//var_dump($nums,$nums2);
$res = array_diff($nums2,$nums);
var_dump($res); die();
