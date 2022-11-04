<?php


/**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $stack = [];
        $len = strlen($s);

        for($i=0; $i< $len; $i++){
            $char = $s[$i];
            if(
                $char == 'a' || $char == 'A' ||
                $char == 'e' || $char == 'E' ||
                $char == 'i' || $char == 'I' ||
                $char == 'o' || $char == 'O' ||
                $char == 'u' || $char == 'U'
            ){
                $stack[] = $char;
            }
        }
        for($i=0; $i< $len; $i++){
            $char = $s[$i];
            if(
                $char == 'a' || $char == 'A' ||
                $char == 'e' || $char == 'E' ||
                $char == 'i' || $char == 'I' ||
                $char == 'o' || $char == 'O' ||
                $char == 'u' || $char == 'U'
            ){
                $val = array_pop($stack);
                $s[$i] = $val;
            }
        }
        return $s;
    }
