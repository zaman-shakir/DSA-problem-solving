<?php
/**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $hash = [];

        for($i=0; $i<strlen($s); $i++){
            $char = $s[$i];
            if(array_key_exists($char,$hash)){
                $hash[$char]++;
            }
            else{
                $hash[$char]++;
            }
        }

        arsort($hash);
        $s = "";
        foreach($hash as $key => $value){
            $while($value > 0){
                $s .= $key;
                $value--;
            }
        }
        return $s;
    }


    ?>
