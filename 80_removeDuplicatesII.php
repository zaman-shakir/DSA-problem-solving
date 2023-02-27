<?php
$nums = [1,1,1,2,2,3];
$nums =[0,0,1,1,1,1,2,3,3];

    function removeDuplicates(&$nums):int {
        $pos = 0;
        $count = count($nums);
        $repeat = 0;
        $current = null;

        for($i=0; $i<$count; $i++) {
            if($current ===  $nums[$i]) {
                $repeat++;

                if($repeat < 2){
                    $nums[$pos++] = $nums[$i];

                }
                continue;
            }

            $current = $nums[$i];
            $repeat = 0;
            $nums[$pos++] = $nums[$i];
            print_r($nums);
        }

        return $pos;

    }
    function removeDuplicates2(&$nums) {

              $current = null;
        $count = count($nums);

        $copyOffset = 0;
        $repeatCounter = 0;
        for ($i = 0; $i < $count; $i++) {
            if ($current === $nums[$i]) {
                $repeatCounter++;
                if ($repeatCounter < 2) {
                    $nums[$i + $copyOffset] = $nums[$i];
                    continue;
                }

                $copyOffset--;
                continue;
            }

            $nums[$i + $copyOffset] = $nums[$i];
            $current = $nums[$i];
            $repeatCounter = 0;
        }

        return $count + $copyOffset;
    }



var_dump(removeDuplicates($nums));




?>
