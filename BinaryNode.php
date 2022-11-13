<?php
Class BinaryNode{

    public function __construct($data = NULL)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
    public function addChild($left = null, $right = null){
        $this->left = $left;
        $this->right = $right;
    }
    public function __toString()
    {
        return " Binry tree";
    }

}

// $ob = new BinaryNode(3);
// echo $ob;

