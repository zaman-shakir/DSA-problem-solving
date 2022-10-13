<?php
    function printMatrix($matrix){
        $row = count($matrix);

        //$column = count($matrix[0]);
        for($i=0 ; $i<$row ; $i++){

            for ($j=0; $j<count($matrix[$i]); $j++){
                echo $matrix[$i][$j]."  ";

            }
            echo "\n";
        }
        echo "------------\n";
    }

    $matrix = [
        [1,0,1,0,1],
        [1,1,1,1,1],
        [1,1,1,1,1],
        [1,1,0,1,1]

    ];

    PrintMatrix($matrix);

    function ZeroMatrix($matrix){

        $row_count = count($matrix);
        $left_col_status = false ;

        for($i=0;$i<$row_count;$i++){

            for($j=0,$col_count = count($matrix[$i]); $j< $col_count; $j++){

                if($matrix[$i][$j] === 0){

                    $matrix[$i][0] = 0;
                    if($j===0){
                        $left_col_status = true;
                    }else{
                        $matrix[0][$j] = 0;
                    }
                }
            }
        }
        printMatrix($matrix);

        //set all row 0
        for($i=1; $i<$row_count;$i++){
            if($matrix[$i][0] == 0 ){

                for($j=1; $j <count($matrix[$i]); $j++ ){
                    $matrix[$i][$j] =0;
                }
            }
        }
        printMatrix($matrix);

        // set all col to 0

        for($j = 1; $j<count($matrix[0]); $j++){
            if($matrix[0][$j] == 0){

                for($i=1; $i<$row_count;$i++){
                    $matrix[$i][$j]= 0;

                }
            }

        }
        // for ($j=1, $columnCount=count($matrix[0]); $j<$columnCount; $j++) {
        //     if ($matrix[0][$j] === 0) {
        //         for ($i=1; $i<$rowCount; $i++) {
        //             $matrix[$i][$j] = 0;
        //         }
        //     }
        // }
        printMatrix($matrix);

        if($matrix[0][0] === 0) {
            for($i=1;$i<count($matrix[0]); $i++){
                $matrix[0][$i] = 0;
            }
        }

        if($left_col_status){
            for($j=1;$j<$row_count;$j++){
                $matrix[$j][0] = 0;
            }
        }
        printMatrix($matrix);


    }
    function zero(array &$matrix) {
        $leftColumnZero = false;
        $rowCount = count($matrix);
        for ($i=0; $i<$rowCount; $i++) {
            for ($j=0, $columnCount=count($matrix[$i]); $j<$columnCount; $j++) {
                if ($matrix[$i][$j] === 0) {
                    // use the topmost cell and the leftmost cells in the
                    // matrix to track whether the entire row/column should
                    // be zeroed, respectively.
                    $matrix[$i][0] = 0;
                    if ($j === 0) {
                        // since we are using cell (0,0) in the matrix
                        // to track whether the top row should be zeroed
                        // let's use a single boolean variable to track
                        // whether the left column should be zeroed.
                        $leftColumnZero = true;
                    } else {
                        $matrix[0][$j] = 0;
                    }
                    break;
                }
            }
        }
        // zero out rows based on zero in the first position
        for ($i=1; $i<$rowCount; $i++) {
            if ($matrix[$i][0] === 0) {
                for ($j=1, $columnCount=count($matrix[$i]); $j<$columnCount; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
        // zero out columns based on zero in the first position
        for ($j=1, $columnCount=count($matrix[0]); $j<$columnCount; $j++) {
            if ($matrix[0][$j] === 0) {
                for ($i=1; $i<$rowCount; $i++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
        // zero out the top row if needed
        if ($matrix[0][0] === 0) {
            for ($j=1, $columnCount=count($matrix[0]); $j<$columnCount; $j++) {
                $matrix[0][$j] = 0;
            }
        }
        // zero out the left column if needed
        if ($leftColumnZero) {
            for ($i=0; $i<$rowCount; $i++) {
                $matrix[$i][0] = 0;
            }
        }
        echo "++++++++++++++++\n";
        printMatrix($matrix);
        echo "++++++++++++++++\n";

    }
    ZeroMatrix($matrix);
    zero($matrix);
?>
