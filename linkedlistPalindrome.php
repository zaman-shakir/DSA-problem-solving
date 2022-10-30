<?php
require_once("lib/Node.php");
require_once("lib/LinkedList.php");

$linkedlist = new LinkedList();

$test_val = [11,12,13,13,14,15,15,16,17];

foreach($test_val as $val){

    $linkedlist->add($val);
}


$a1 = new Node();
$a1->setData(1);

$a2 = new Node();
$a2->setData(2);

$a3 = new Node();
$a3->setData(2);

$a4 = new Node();
$a4->setData(1);

$a1->setNext($a2);
$a2->setNext($a3);
$a3->setNext($a4);

$next = $a1;
while($next!== null){
    //$next = $a1;
    echo $next->getData()." -> ";
    $next = $next->getNext();
}
echo "\n";

//var_dump($a1->getData());
function isPalindrome(Node $head) {
    //var_dump($head->getData()); die();

    $arr= [];
    //$node = $head;
    while($head !== null){
        $arr[] = $head->getData();
        $head = $head->getNext();
    }
    for($i=0, $length = count($arr); $i < $length/2; $i++ ){

        if($arr[$i] !== $arr[$length-1-$i] ) return false;
    }
    return true;

}
var_dump(isPalindrome($a1));
