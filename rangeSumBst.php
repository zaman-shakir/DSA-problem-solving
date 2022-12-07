<?php
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
     public $sum = 0;
    function rangeSumBST($root, $low, $high) {
        $this->_inorder($root,$low,$high);
        return $this->sum;
    }

    function _inorder($node,$low,$high){
        if($node->left) $this->_inorder($node->left,$low,$high);

        if($node->right) $this->_inorder($node->right,$low,$high);
        if($low <= $node->val  && $node->val <= $high) $this->sum += $node->val;
    }
}
