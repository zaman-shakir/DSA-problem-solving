<?php
if(  abs( ($nums[$i]/ ($i+1)) - (($nums[$len-1]- $nums[$i])/ ($len-1-$i) ) ) < $min  ) {
            //     $min = abs($nums[$i] - ($nums[$len]- $nums[$i]));
            //     $position = $i;
            // }