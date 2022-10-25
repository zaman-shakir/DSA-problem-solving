<?php
require_once("lib/Node.php");
require_once("lib/LinkedList.php");

$linkedlist = new LinkedList();

$test_val = [11,12,13,13,14,15,15,16,17];

foreach($test_val as $val){

    $linkedlist->add($val);
}


$a1 = new Node();
$a1->setData(7);

$a2 = new Node();
$a2->setData(1);

$a3 = new Node();
$a3->setData(6);

$a1->setNext($a2);
$a2->setNext($a3);

$b1 = new Node();
$b1->setData(5);
$b2 = new Node();
$b2->setData(9);

$b3 = new Node();
$b3->setData(2);

$b1->setNext($b2);
$b2->setNext($b3);
$next = $a1;
while($next!== null){
    //$next = $a1;
    echo $next->getData()." -> ";
    $next = $next->getNext();
}
echo "\n";
$next = $b1;
while($next!== null){
    //$next = $b1;
    echo $next->getData()." -> ";
    $next = $next->getNext();
}
echo "\n";
function sumList(Node $n1, Node $n2){

    $head = $tail = null;
    $carry = 0;
    while($n1 !== null || $n2 !== null){

        $sum = $carry;
        if($n1 !== null){
            $sum += $n1->getData();
            $n1 = $n1->getNext();
        }
        if($n2 !== null){
            $sum += $n2->getData();
            $n2 = $n2->getNext();
        }
        if($sum >9){
            $digit = $sum % 10;
            $node = new Node($digit);
            if($head === null){
                $head = $tail = $node;
            }
            else{
                $tail->setNext($node);
                $tail = $node;
            }
            $carry =(int) floor(($sum-$digit) / 10);
        }
        else{

            $node = new Node($sum);
            if($head === null){
                $head = $tail = $node;
            }
            else{
                $tail->setNext($node);
                $tail = $node;
            }
            $carry = 0;
        }

    }
    if($carry > 0){
        $node = new Node($carry);
        if($head === null){
            $head = $tail = $node;
        }
        else{
            $tail->setNext($node);
            $tail = $node;
        }
    }
    return $head;

}
//var_dump($a1);
$h1 = sumList($a1,$b1);
$next = $h1;
while($next!== null){
    //$next = $b1;
    echo $next->getData()." -> ";
    $next = $next->getNext();
}









