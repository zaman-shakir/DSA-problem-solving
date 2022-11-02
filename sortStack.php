<?php

function sortStack($stack){

    $tmpStack = [];

    while(!empty($stack)){

        $tmp = array_pop($stack);
        while(!empty($tmpStack) && $tmp < $tmpStack[count($tmpStack)-1]){
                $val = array_pop($tmpStack);
                array_push($stack,$val);
            }
        array_push($tmpStack,$tmp);

    }
        return $tmpStack;
}


$arr= [];
array_push($arr,111);
array_push($arr,25);
array_push($arr,95);
array_push($arr,35);
array_push($arr,55);
array_push($arr,45);

var_dump($arr);

var_dump(sortStack($arr));


?>
