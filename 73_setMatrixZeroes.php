<?php
class Solution {

    /**
    * @param Integer[][] $matrix
    * @return NULL
    */
    function setZeroes(&$matrix) {

        $zeroRows = [];
        $zeroCols = [];

        for($i=0; $i< count($matrix); $i++){

            for($j=0; $j< count($matrix[$i]); $j++){
                if($matrix[$i][$j] === 0) {
                    $zeroRows[] = $i;
                    $zeroCols[] = $j;

                }
            }

        }

        foreach($zeroRows as $r){

            for($i=0; $i<count($matrix[$r]); $i++){

                $matrix[$r][$i] = 0;

            }

        }

        foreach($zeroCols as $c){

            for($i=0; $i<count($matrix); $i++){

                $matrix[$i][$c] = 0;

            }

        }





        return null;
    }
    function printMatrix($matrix){
        $m = count($matrix);
        $n = count($matrix[0]);
        for($i=0 ; $i<$m ; $i++){

            for ($j=0; $j<$n; $j++){
                echo $matrix[$i][$j]." ";
            }
            echo "\n";
        }
    }

}

$matrix = [[4,1,2,0],[3,4,6,2],[1,3,1,5]];
$matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
$matrix = [[1],[0],[3]];


$sol = new Solution();
$sol->printMatrix($matrix);
echo "--------------------";
 echo "\n";
$sol->setZeroes($matrix);

$sol->printMatrix($matrix);

