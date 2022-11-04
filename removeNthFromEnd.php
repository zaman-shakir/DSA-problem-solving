<?php


function removeNthFromEnd($head, $n) {
    $slow = $head;
    $fast = $head;
    for($i= 0 ;$i<$n; $i++){
        $fast = $fast->next;
    }

    if(null === $fast){
        return $head->next;
    }
    while($fast->next !== null){
        $slow = $slow->next;
        $fast = $fast->next;
        //var_dump($slow->val, $fast->val);
    }
    //$slow->val = $slow->next->val;
    $slow->next = $slow->next->next;
    return $head;
}



?>
