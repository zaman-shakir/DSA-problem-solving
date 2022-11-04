<?php


/**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $stack = [];
        $hash = array(
            'a' => true,
            'A' => true,
            'e' => true,
            'E' => true,
            'I' => true,
            'i' => true,
            'o' => true,
            'O' => true,
            'u' => true,
            'U' => true,
        );
        $len = strlen($s);

        for($i=0; $i< $len; $i++){
            $char = $s[$i];
            if(array_key_exists($char,$hash)){
                $stack[] = $char;
            }
        }
        if(count($stack)==0) return $s;
        for($i=0; $i< $len; $i++){
            $char = $s[$i];
            if(array_key_exists($char,$hash)){
                $val = array_pop($stack);
                $s[$i] = $val;
            }
        }
        return $s;
    }

    var_dump(reverseVowels('le\Etcode'));
