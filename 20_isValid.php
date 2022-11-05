<?php

/**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = array(
            ']'=>'[',
            '}' =>'{',
            ')' => '('
        );
        $stack = [];
        $len = strlen($s);
        if($len%2 !== 0) return false;
        for($i = 0 ; $i< $len ; $i++){
            $char = $s[$i];
            if($char === '(' || $char === '{' || $char === '['){
                $stack[] = $char;
            }
            else{
                if( !empty($stack) &&  $map[$char] === $stack[count($stack)-1]){
                    array_pop($stack);
                }
                else return false;

            }

        }
        if(empty($stack)) return true;
        return false;

    }

?>
