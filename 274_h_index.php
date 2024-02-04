<?php



$citations = [3, 0, 6, 1, 5];
$citations = [100];
//$citations = [0];
//01356
function hIndex($citations)
{
    //sort($citations);
    $max_citation = -1;
    $length = count($citations);

    for ($i = 0; $i < $length; $i++) {
        $greater = 0;
        //find how many numbers are larger then current $i
        for ($j = 0; $j < $length; $j++) {
            if ($citations[$i] <= $citations[$j]) {
                $greater++;
            }
        }
        if ($greater >= $citations[$i] && $citations[$i] > $max_citation) {
            $max_citation = $citations[$i];
        }
    }
    return $max_citation;
}
var_dump(hIndex($citations));
