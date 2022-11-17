<?php
Class Node{
    public $info;
    public $left;
    public $right;
    public $level;
    public function __construct($info = null)
    {
        $this->info = $info;
        $this->left = null;
        $this->right = null;
        $this->level = null;
    }
    public function __toString()
    {
        return "$this->info";
    }
}
//$n1 = new Node(5);
Class BST{
    public $root;
    public function __construct()
    {
        $this->root = null;
    }

    public function create($info){

        // check if root is not null
        if($this->root == null){
            $this->root = new Node($info);
        }

    }



}






?>
