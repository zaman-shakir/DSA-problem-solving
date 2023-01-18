<?php
    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $map = [];
        for($i=0; $i<strlen($s); $i++){
            if(array_key_exists($s[$i], $map)){
                 $map[$s[$i]]++;
            }
            else{
                $map[$s[$i]] = 1;
            }
        }
        for($i=0; $i<strlen($s); $i++){
           if($map[$s[$i]] == 1) return $i;
        }
        return -1;

    }
?>
