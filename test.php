<?php
//require_once('RotateMatrix.php');

function printMatrix($matrix){

    for($i=0 ; $i<4 ; $i++){

        for ($j=0; $j<4; $j++){
            echo $matrix[$i][$j]." ";
        }
        echo "\n";
    }
}
$matrix =   [
                [5 , 1,  9,  11],
                [2 , 4,  8,  10],
                [13, 3,  6,  7],
                [15, 14, 12, 16]
            ];


function rotate(array $matrix):array {
    echo "before rotate"; echo "\n";
    printMatrix($matrix); echo "\n";

    $len = count($matrix);

    for($layer=0; $layer < $len/2; $layer++) {

        // $first = $layer;
        $last = $len-1-$layer;

        for($i=$layer; $i < $last; $i++) {

            $offset = $i-$layer;

            $topLeft = $matrix[$layer][$i];

            // set top left
            $matrix[$layer][$i] = $matrix[$last-$offset][$layer];

            // set bottom left
            $matrix[$last-$offset][$layer] = $matrix[$last][$last-$offset];

            // set bottom right

            $matrix[$last][$last-$offset] = $matrix[$layer][$last-$offset];


            $matrix[$layer][$last-$offset] = $topLeft;

        }

    }




    echo "after rotate"; echo "\n";
    printMatrix($matrix); echo "\n";
    return $matrix;

}
rotate($matrix);
