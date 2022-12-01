<?php
 $arr = [[0,7],[0,8],[6,1],[2,0],[0,4],[5,8],[4,7],[1,3],[3,5],[6,5]];


 function buildAdjList($edges)
 {
     $result = [];
     foreach($edges as $edge){

         if(!array_key_exists($edge[0],$result)){
             $result[$edge[0]] = [];
         }

         if(!array_key_exists($edge[1],$result)){
             $result[$edge[1]] = [];
         }

         $result[$edge[0]][] = $edge[1];
         $result[$edge[1]][] = $edge[0];
     }

     return $result;
 }

var_dump(buildAdjList($arr));
/*
Array
(
    [0] => Array
        (
            [0] => 7
            [1] => 8
            [2] => 4
        )

    [6] => Array
        (
            [0] => 1
            [1] => 5
        )

    [2] => Array
        (
            [0] => 0
        )

    [5] => Array
        (
            [0] => 8
        )

    [4] => Array
        (
            [0] => 7
        )

    [1] => Array
        (
            [0] => 3
        )

    [3] => Array
        (
            [0] => 5
        )

)
*/
