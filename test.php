<?php

function d2b($d){
    echo sprintf('%08b',  $d)."\n";
}

// $d1 =5;
// $d2 =7;
// echo $d1."----".d2b($d1)."\n";;
// echo "--------------------------------"."\n";
// echo $d2."----".d2b($d2)."\n";;
// echo "--------------------------------"."\n";
// echo ($d2 ^ $d1)."\n";
// d2b(($d2 ^ $d1));

function update($n, $m, $i, $j){

    // setting all 1
    $allOnes = ~0;
    $left = $allOnes<<($j+1);
    d2b($left);

    $right = (( 1<<$i)  );
    d2b($right);
    $right = (( 1<<$i) -1 );
    d2b($right);

    $mask = $left | $right;
    d2b($mask);
    d2b($n);
    $n_cleared = $n & $mask;
    d2b($n_cleared);
    d2b($m);
    $m_shifted = $m << $i;
    d2b($m_shifted);


}

$m=19;
$n=1024;
$i=2; $j=6;

update($n, $m, $i, $j);
