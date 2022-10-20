<?php
$words = ["i","love","leetcode","i","love","coding"]; $k = 2;
$words = ["the","day","is","sunny","is","the","the","the","sunny","is","is"]; $k = 4;


function topKFrequent($words,$k){

    $hashTable = [];

    foreach($words as $word){

        if(array_key_exists($word,$hashTable)){
            $hashTable[$word] = $hashTable[$word]+1;
        }
        else{
            $hashTable[$word] = 1;
        }
    }

    arsort($hashTable);
    array_multisort(array_values($hashTable), SORT_DESC, array_keys($hashTable), SORT_ASC, $hashTable);

    return array_slice(array_keys($hashTable),0,$k);

}
var_dump(topKFrequent($words,4));

?>
