<?php

function findWords($words):array{


    $row1 = array(
        'q' => true,
        'w' => true,
        'e' => true,
        'r' => true,
        't' => true,
        'y' => true,
        'u' => true,
        'i' => true,
        'o' => true,
        'p' => true,
    );
    $row2 = array(
        'a' => true,
        's' => true,
        'd' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'j' => true,
        'k' => true,
        'l' => true,
    );
    $row3 = array(
        'z' => true,
        'x' => true,
        'c' => true,
        'v' => true,
        'b' => true,
        'n' => true,
        'm' => true,
    );
    $res =[];

    foreach($words as $word){

        $first_letter = strtolower($word[0]);
        if(isset($row1[$first_letter])){
            $row = $row1;
        }elseif(isset($row2[$first_letter])){
            $row = $row2;
        }elseif(isset($row3[$first_letter])){
            $row = $row3;
        }else{
            $row = null;
            continue;
        }
        for($i= 0; $i<strlen($word); $i++){
            $char = strtolower($word[$i]);
            if(!isset($row[$char])){
                //$row_status = false;
                continue 2;
            }
        }
            $res[] = $word;

    }

    return $res;

}

//var_dump(findWords(["Hello","Alaska","Dad","Peace"]));
var_dump(findWords(["omk"]));


?>
