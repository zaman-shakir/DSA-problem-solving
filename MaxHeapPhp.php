<?php

$maxheap = new SplMaxHeap();

$maxheap->insert(5);
$maxheap->insert(9);
$maxheap->insert(3);
$maxheap->insert(11);

echo $maxheap->extract();
echo "\n";
echo $maxheap->top();





