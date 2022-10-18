<?php
require_once('Node.php');
class DoublyLinkedListNode extends Node {
    private $previous;

    public function getPrevious() {
        return $this->previous;
    }

    public function setPrevious($node) {
        $this->previous = $node;
    }
}
?>
