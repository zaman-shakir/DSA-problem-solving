<?php
    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        //65,90
        //97,122
        $count = 0;
        for($i=0; $i<strlen($word); $i++){
            if(ord($word[$i]) >=65 && ord($word[$i]) <= 90 ){
                $count++;
            }
        }
        if($count === strlen($word)) return true;
        if($count === 0 ) return true;
        if($count ===1 && ord($word[0]) >= 65 && ord($word[0]) <=90 ) return true;
        return false;

    }
