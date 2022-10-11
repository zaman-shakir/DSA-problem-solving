<?php
function stringCompression(string $str):string{

    $original_length = strlen($str);
    $compressed_tokens = [];
    $compressed_length = 0;
    $last_char = null;
    $same_char_count = 0;
    for($i=0; $i<$original_length; $i++){

        $char = $str[$i];
        if($last_char !== null && $char !== $last_char){

            $compressed_token = $last_char.$same_char_count;
            $compressed_length += strlen($compressed_token);
            if($compressed_length >= $original_length){
                return $str;
            }
            $compressed_tokens[] = $compressed_token;
            $same_char_count = 1;
        }else{

            $same_char_count++;
        }
        $last_char = $str[$i];
    }

    //for the last

    if($same_char_count > 0){

        $compressed_token = $last_char.$same_char_count;
        $compressed_length += strlen($compressed_token);
        if($compressed_length >= $original_length){
            return $str;
        }
        $compressed_tokens[] = $compressed_token;

    }

    return implode($compressed_tokens);
}



var_dump(stringCompression("aaahhhhhbbbab"));
