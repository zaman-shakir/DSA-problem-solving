<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public $maxSum = PHP_INT_MIN;

    function maxPathSum($root) {
        $this->getMaxSum($root);
        return $this->maxSum;
    }
    function getMaxSum($node){
        if(!$node) return 0;
        $leftSum = $node->left ? $this->getMaxSum($node->left): 0 ;

        $rightSum = $node->right ? $this->getMaxSum($node->right): 0 ;

        $this->maxSum = max($this->maxSum,($node->val+$leftSum+$rightSum ));

        return max(0, $node->val+$leftSum, $node->val+$rightSum);

    }
}
