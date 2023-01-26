<?php
class Solution {

    /**
    * @param Integer[][] $matrix
    * @return NULL
    */
    function setZeroes(&$matrix) {

        $rows = count($matrix);
        $columns = count($matrix[0]);
        var_dump($rows."--".$columns);
        $topZero = false;
        for($i=0; $i<$rows; $i++) {

            for($j=0; $j<$columns; $j++) {

                if($matrix[$i][$j] ==0){

                    if($i==0 && $j==0){
                        $topZero = true;
                        // $matrix[$i][0] = 0;
                        // $matrix[0][$j] = 0;
                    }
                    else{
                        $matrix[$i][0] = 0;
                        $matrix[0][$j] = 0;
                    }

                }

            }

        }
     //   print_r($matrix);
         print_r($matrix);
         print_r($columns);
         echo "\n";
        // set columns 0 by first rows
        for($i=0; $i<$columns; $i++){

            if($matrix[0][$i] === 0){

                for($j=0; $j<$rows; $j++) {
                    $matrix[$j][$i] = 0;
                }
            }
        }
    // set rows 0 by first column;

      for($i=1; $i<$rows; $i++){

            if($matrix[$i][0] == 0){

                for($j=0; $j<$columns; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }

        if($topZero){
            for($i=0; $i<$rows; $i++){
                $matrix[$i][0] = 0;
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

