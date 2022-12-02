<?php

/**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        $hash1=[];
        $hash2=[];
        $word1 = str_split($word1);
        $word2 = str_split($word2);

        if(count($word1) !== count($word2)) return false;
        for($i=0; $i<count($word1); $i++){

            if(!in_array($word1[$i],$word2)) return false;

            if( array_key_exists($word1[$i],$hash1) ){
                $hash1[$word1[$i]]++;
            }
            else{
                $hash1[$word1[$i]] = 1;
            }
            if( array_key_exists($word2[$i],$hash2) ){

                $hash2[$word2[$i]]++;
            }
            else{
                $hash2[$word2[$i]] = 1;
            }
        }
        while(!empty($hash1)){
            $frequency = array_pop($hash2);
            $index = array_search($frequency, $hash1);
            if(!$index) return false;
            unset($hash1[$index]);
        }
        return empty($hash1);

    }
