 <?php
    //4*4 matrix
    $n = 4 ;
    $matrix = [];
    for($i=0; $i<$n; $i++){
         for($j=0; $j<$n; $j++){

            $matrix[$i][$j] = (string)$i.(string)$j;
         }

    }

    function printMatrix($matrix){

        for($i=0 ; $i<4 ; $i++){

            for ($j=0; $j<4; $j++){
                echo $matrix[$i][$j]." ";
            }
            echo "\n";
        }
    }
    //var_dump(count($matrix));
    /*
    Array
    (
        [0] => Array
            (
                [0] => 00
                [1] => 01
                [2] => 02
                [3] => 03
            )

        [1] => Array
            (
                [0] => 10
                [1] => 11
                [2] => 12
                [3] => 13
            )

        [2] => Array
            (
                [0] => 20
                [1] => 21
                [2] => 22
                [3] => 23
            )

        [3] => Array
            (
                [0] => 30
                [1] => 31
                [2] => 32
                [3] => 33
            )

    )
   */

    /**
     * original matrix
     *  00  01  02  03
     *  10  11  12  13
     *  20  21  22  23
     *  30  31  32  33
     *
     * rotated matrix
     * 30 20 10 00
     * 31 21 11 01
     * 32 22 12 02
     * 33 23 13 03
     */

    function rotateMatrix($matrix){
        var_dump("before");
        printMatrix($matrix);
        $len = count($matrix);

        for($layer=0; $layer< $len/2; $layer++){

            $first = $layer;

            $last = $len-1-$layer;

            for($i= $first; $i<$last; $i++){

                $offset = $i- $first;

                $top = $matrix[$first][$i];

                //left top
                $matrix[$first][$i] = $matrix[$last-$offset][$first];

                //bottom left
                $matrix[$last - $offset][$first] = $matrix[$last][$last-$offset];

                // bottom right
                $matrix[$last][$last-$offset] = $matrix[$i][$last];

                // top right
                $matrix[$i][$last] = $top;

                // top
            }

        }

        var_dump("after");
        printMatrix($matrix);
    }
    var_dump(rotateMatrix($matrix));
 ?>
