<?php
$X = "AGGTAB";
$Y = "GXTXAYB";
echo "Length of LCS is ";
echo lcs($X, $Y);

function lcs($text1,$text2){

    $m = strlen($text1);
    $n = strlen($text2);

    $lcs = [];

    for($i=0; $i<=$m; $i++){
        for($j=0; $j<=$n; $j++){
            if($i == 0 || $j == 0) $lcs[$i][$j] = 0;

            elseif( $text1[$i-1]  == $text2[$j-1]  ) $lcs[$i][$j] = $lcs[$i-1][$j-1]+1;

            else $lcs[$i][$j] = max($lcs[$i-1][$j], $lcs[$i][$j-1]);

        }
    }
    echo "<pre>";
    var_dump($lcs); die();
    var_dump($lcs[$m-1][$n-1]); die();




}
