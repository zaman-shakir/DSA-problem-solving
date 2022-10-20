<?php
require_once("lib/Node.php");
require_once("lib/LinkedList.php");

function removeDups2(Node $node){

    $hash = [];
    $previous = $node;
    $next = $node !== null ? $node->getNext(): null;

    while($next !== null){

        $data = $next->getData();
        if(array_key_exists($data,$hash)){
            $previous->setNext($next->getNext());
            $next = $previous;
        }
        else{
            $hash[$data] = $next;
            $previous = $next;
        }
        $next = $next->getNext();
    }

}
function removeDups(Node $node){


    $pointer1 = $node;
    //$pointer2 = $node !== null ? $node->getNext(): null;
    while($pointer1 !== null){
        $previous = $pointer1;
        $pointer2 = $pointer1->getNext();
        while($pointer2 != null){

            if($pointer2->getData() == $previous->getData()){

                $previous->setNext($pointer2->getNext());

                $pointer2 = $previous;

            }
            else{
                //$pointer2 = $pointer2->getNext();
                $previous = $pointer2->getNext();
            }
            $pointer2= $pointer2->getNext();
        }
        $pointer1 = $pointer1->getNext();

    }


}


$linkedlist = new LinkedList();

$test_val = [11,12,13,13,14,15,15,16,17];

foreach($test_val as $val){

    $linkedlist->add($val);
}

//$linkedlist->print();

$temp = new DoublyLinkedListNode();
$temp = $linkedlist->getHead();
//var_dump($temp->getData()); die();
//$node = $linkedlist->peekFirst();
$linkedlist->print();
removeDups($temp);
$linkedlist->print();


?>
