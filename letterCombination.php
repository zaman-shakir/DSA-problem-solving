<?php

function letterCombinations($digits){


}
public $letters =
[
    2 => ['a','b','c'],
    3 => ['d','e','f'],
    4 => ['g','h','i'],
    5 => ['j','k','l'],
    6 => ['m','n','o'],
    7 => ['p','q','r','s'],
    8 => ['t','u','v'],
    9 => ['w','x','y','z']
];

  function letterCombinations($digits) {

    if ($digits==='') return [];
    $res = $this->letters[$digits[0]];
    for ($i=1; $i<strlen($digits); $i++) {
        $temp = [];
        foreach ($this->letters[$digits[$i]] as $ch)
        {
            foreach ($res as $r)
            {
                $temp[] = $r . $ch;
            }
        }
        $res = $temp;
    }
    return $res;
}
