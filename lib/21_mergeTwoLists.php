<?php
         $prevNode = new ListNode();
         $head = $prevNode;
         while($list1 !== null && $list2 !== null){

             if($list1->val < $list2->val){
                 $prevNode->next = $list1;
                 $list1 = $list1->next;
             }
             else{
                 $prevNode->next = $list2;
                 $list2 = $list2->next;
             }
             $prevNode = $prevNode->next;

         }

         if($list1 !== null){
             $prevNode->next = $list1;
         }
         elseif($list2 !== null){
             $prevNode->next = $list2;
         }


        return $head->next;
