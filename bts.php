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
        //when root is not empty
        else{
            $current = $this->root;
            while(true){

                if($info < $current->info ){

                    if($current->left){
                        $current = $current->left;
                    }
                    else{
                        $current->left = new Node($info);
                        break;
                    }

                }
                elseif($info > $current->info){

                    if($current->right){
                        $current = $current->right;
                    }
                    else{
                        $current->right = new Node($info);
                        break;
                    }
                }
                else{
                    break;
                }

            }
        }

    }
    public function traverse($method = null){

        if($method == null){
            $this->_inorder($this->root);
        }
        switch($method){
            case 'inorder':
                $this->_inorder($this->root);
                break;
            case 'postorder':
                $this->_postorder($this->root);
            case 'preorder':
                $this->_preorder($this->root);
        }
    }
    public function _inorder($node){
        if($node->left){
            $this->_inorder($node->left);
        }
        echo $node. " ";

        if($node->right) {
           $this->_inorder($node->right);
        }

    }
    public function _postorder($node){

    }
    public function _preorder($node){

    }


}
/*
          10
        /    \
       6      18
      /  \    /  \
     4   8   15   21

*/
$tree1 = new BST();
$tree1->create(10);
$tree1->create(6);
$tree1->create(4);
$tree1->create(8);
$tree1->create(18);
$tree1->create(15);
$tree1->create(21);

$tree1->traverse();
//var_dump($tree1);






?>
