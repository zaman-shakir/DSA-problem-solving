<?php

    function intToRoman($num){

        $roman = array(
            1000 => "M",
            900 => "CM",
            500 => "D",
            400 => "CD",
            100 => "C",
            90 => "XC",
            50 => "L",
            40 => "XL",
            10 => "X",
            9 => "IX",
            5 => "V",
            4 => "IV",
            1 => "I"
        );

        $str = '';
        while($num > 0){

            foreach($roman as $key=>$value){
                if($num >= $key ){
                    $str .= $value;
                    $num -= $key;
                    break;
                }
            }
        }
        return $str;
    }

intToRoman(111);













