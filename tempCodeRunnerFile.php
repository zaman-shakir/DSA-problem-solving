<?php
$length = count($nums);
        $right = 0;
        for ($i = 1; $i < $length; $i++) {

            if($nums[$i] != $nums[$right]){
                $right++;
                $nums[$right] = $nums[$i];
            }
        }