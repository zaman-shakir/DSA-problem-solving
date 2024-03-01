<?php

function truncateSentence($s, $k)
{
    $words = explode(" ", $s);
    $result = implode(" ", array_slice($words, 0, $k));
    return $result;
}

// Test cases
$s1 = "Hello how are you Contestant";
$k1 = 4;
echo truncateSentence($s1, $k1) . "\n"; // Output: "Hello how are you"

$s2 = "What is the solution to this problem";
$k2 = 4;
echo truncateSentence($s2, $k2) . "\n"; // Output: "What is the solution"

$s3 = "chopper is not a tanuki";
$k3 = 5;
echo truncateSentence($s3, $k3) . "\n"; // Output: "chopper is not a tanuki"
