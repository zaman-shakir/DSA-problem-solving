<?php
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        $st =[];
        $tt = [];
        $slen = strlen($s);
        $tlen = strlen($t);
        for($i=0; $i<$slen; $i++){
            if($s[$i] == "#") array_pop($st);
            else array_push($st, $s[$i]);
        }
        for($i=0; $i<$tlen; $i++){
            if($t[$i] == "#") array_pop($tt);
            else array_push($tt, $t[$i]);
        }
        var_dump($st,$tt);
        return empty(array_diff_assoc($st,$tt));
    }

    $s = "xywrrmp"; $t = "xywrrmu#p";
    var_dump(backspaceCompare($s,$t));



?>
