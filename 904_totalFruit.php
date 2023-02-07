<?php

    /**
     * @param int array $ftuits
     * @return int
     */
    function totalFruit( array $fruits):int{
        $max_size = 0;

        for($i=0; $i<count($fruits); $i++){
            $size = 0;
            $basket1 = $fruits[$i];
            $basket2 = null;

            for($j=$i; $j<count($fruits); $j++){

                if($fruits[$j] == $basket1){
                    $size++;

                }
                elseif( $basket2 == null ){
                    $basket2 = $fruits[$j];
                    $size++;
                }
                elseif( $basket2 != null && $fruits[$j] == $basket2){
                    //$basket2 = $fruits[$j];
                    $size++;
                }
                else{
                    break;
                }
                echo $i."-".$j." : ".$size."\n";
                $max_size = $size > $max_size ? $size: $max_size ;
            }


        }
        return $max_size;
    }

    $fruits = [1,2,3,2,2];
    $fruits = [0,1,2,2];
    $fruits = [3,3,3,1,2,1,1,2,3,3,4];
    $fruits =[1,0,2,3,4];

    var_dump(totalFruit($fruits));
