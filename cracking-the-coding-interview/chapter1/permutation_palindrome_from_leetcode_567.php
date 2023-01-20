<?php

$s1 = "ab"; $s2 = "eidboaooo";

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
        $len1 = strlen($s1);
        $len2 = strlen($s2);
        if($len2 < $len1) return false;
        $left = 0;
        $right = $len1-1;
        $map1 = [];
        for($j=0; $j<$len1; $j++){
            if(array_key_exists($s1[$j],$map1)){
                $map1[$s1[$j]]++;
            }
            else{
                $map1[$s1[$j]] = 1;

            }
        }
        while($right < $len2){
            $str = substr($s2,$left,$len1);
            $res = $this->checkAnagram($map1, $str);
            if($res) return true;
            $left++;
            $right++;
        }
        return false;

    }
    function checkAnagram($map, $s2){
        for($i=0; $i<strlen($s2); $i++){
            if(array_key_exists($s2[$i],$map)){
                if($map[$s2[$i]] == 1){
                    unset($map[$s2[$i]]);
                }
                else{
                    $map[$s2[$i]]--;
                }
            }
            else{
                return false;
            }
        }

        if(count($map)==0) return true;
        return false;
    }
}

$sol = new Solution();
var_dump($sol->checkInclusion($s1,$s2));
