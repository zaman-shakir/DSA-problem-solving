<?php
$words = ["hello","leetcode"]; $order = "hlabcdefgijkmnopqrstuvwxyz";
//$words = ["word","world","row"]; $order = "worldabcefghijkmnpqstuvxyz";

    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order) {
        $map = [];
        for($i=0; $i< strlen($order); $i++ ){

            $map[$order[$i]] = $i+1;
        }

        for($j=0; $j<count($words)-1; $j++) {

            $left = $words[$j];
            $right = $words[$j+1];

            $len = strlen($left)> strlen($right)? strlen($left):strlen($right);

            for($i=0; $i<$len; $i++) {
                $val1 = isset($left[$i]) ? $map[$left[$i]] : 0;
                $val2 = isset($right[$i]) ? $map[$right[$i]] : 0;
                var_dump($val1.$left[$i]); echo "\n";
                var_dump($val2.$right[$i]); echo "\n";
                echo "--------\n";
                if($val1 === $val2) continue;
                if ($val1 < $val2) break;
                if($val2 < $val1) return false;
            }

        }
        return true;

    }

    var_dump(isAlienSorted($words,$order));
