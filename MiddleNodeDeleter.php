<?php
require_once("lib/Node.php");
require_once("lib/LinkedList.php");

function middleNodeDeleter(Node $node) {

    if($node == null){
        throw new InvalidArgumentException("node is null");
    }

    $next = $node->getNext();

    if($next == null){
        throw new InvalidArgumentException("node is not middle");

    }

    $node->setData($next->getData());
    $node->setNext($next->getNext());


}




$linkedlist = new LinkedList();

$test_val = [11,12,13,14,15,16,17];

foreach($test_val as $val){

    $linkedlist->add($val);
}



$temp = new DoublyLinkedListNode();
$temp = $linkedlist->getHead();
$temp = $temp->getNext();
var_dump($temp->getData());
$linkedlist->print();
middleNodeDeleter($temp);
$linkedlist->print();

//var_dump("\n",find($temp,4));
//$linkedlist->print();


?>
