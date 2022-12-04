<?php
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {

        $ans = [];
        foreach($nums1 as $n1){
            $indexOfNums2 = array_search($n1,$nums2);
            $res = -1;
            var_dump("1",$n1,$indexOfNums2);
            if($indexOfNums2!== false){
                for($j=$indexOfNums2; $j<count($nums2); $j++){
                    var_dump("2",$nums2[$j],$n1);
                    if($nums2[$j] > $n1){
                        $res = $nums2[$j];
                        break;
                    }
                }
            }
            $ans[] = $res;
        }
        return $ans;
    }
    $nums1 = [4,1,2]; $nums2 = [1,3,4,2];

    nextGreaterElement($nums1,$nums2);
