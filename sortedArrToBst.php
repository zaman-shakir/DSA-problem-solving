<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        $root = $this->buildTree($nums);
        return $root;
    }

    function buildTree($nums){

        if(empty($nums)) return null;

        $rootIndex = floor(count($nums)/2);
        $root = new TreeNode($nums[$rootIndex]);
        $leftArr = array_slice($nums,0,$rootIndex);
        $root->left = $this->buildTree($leftArr);
        $rightArr = array_slice($nums, $rootIndex+1);
        $root->right =   $this->buildTree($rightArr);

        return $root;

    }
}
