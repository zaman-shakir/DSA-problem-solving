<?php
require_once("lib/Node.php");
require_once("lib/LinkedList.php");

function find(Node $node, $k) {
    $pointer1 = $node;
    $pointer2 = null;
    $i = 0;
    while ($pointer1 !== null) {
        if (++$i == $k) {
            // start iterating over list with 2nd pointer lagging k elements behind 1st pointer
            $pointer2 = $node;
        } elseif ($pointer2 !== null) {
            $pointer2 = $pointer2->getNext();
        }
        $pointer1 = $pointer1->getNext();
    }
    return $pointer2 !== null ? $pointer2->getData() : null;
}



$linkedlist = new LinkedList();

$test_val = [11,12,13,14,15,16,17];

foreach($test_val as $val){

    $linkedlist->add($val);
}



$temp = new DoublyLinkedListNode();
$temp = $linkedlist->getHead();
$temp = $temp->getNext()->getNext();
var_dump($temp->getData());
//$linkedlist->print();
//var_dump("\n",find($temp,4));
//$linkedlist->print();


?>
