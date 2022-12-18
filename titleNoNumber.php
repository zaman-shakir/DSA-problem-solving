<?php
/**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $decimal = 0;
        $length = strlen($columnTitle);

        for($i = 0; $i < $length; $i++) {
            $decimal += ((int) ord($columnTitle[$i])-64) * pow(26 , $length - 1 - $i);
        }
        return $decimal;
    }



?>
