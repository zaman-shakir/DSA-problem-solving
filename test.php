<?php

  //node structure
  class Node {
    public $data;
    public $next;
  }
  class LinkedList {
    public $head;

    //constructor to create an empty LinkedList
    public function __construct(){
      $this->head = null;
    }
    public function PrintList() {

        //1. create a temp node pointing to head
$temp = new Node();
                $temp = $this->head;

        //2. if the temp node is not null continue
        //   displaying the content and move to the
        //   next node till the temp becomes null
        if($temp != null) {
          echo "\nThe list contains: ";
          while($temp != null) {
            echo $temp->data." ";
            $temp = $temp->next;
          }
        } else {

          //3. If the temp node is null at the start,
          //   the list is empty
          echo "\nThe list is empty.";
        }
      }
      public function push_back($newElement) {

        //1. allocate node
        $newNode = new Node();

        //2. assign data element
        $newNode->data = $newElement;

        //3. assign null to the next of new node
        $newNode->next = null;

        //4. Check the Linked List is empty or not,
        //   if empty make the new node as head
        if($this->head == null) {
          $this->head = $newNode;
        } else {

          //5. Else, traverse to the last node
          $temp = new Node();
          $temp = $this->head;
          while($temp->next != null) {
            $temp = $temp->next;
          }

          //6. Change the next of last node to new node
          $temp->next = $newNode;
        }
      }

  };




$MyList = new LinkedList();
