<?php
require_once('BinaryNode.php');

class BinaryTree
{
    private $root = null;
    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    public function insert($data)
    {
        $node = new BinaryNode($data);
        if ($this->isEmpty()) {
            $this->root = $node;
            return true;
        } else {
            return $this->insertNode($node, $this->root);
        }
    }
    /**
     * Method to recursively add nodes to the binary tree
     */
    private function insertNode($node, $current)
    {
        $added = false;
        while ($added === false) {
            if ($node->data < $current->data) {
                if ($current->left === null) {
                    $current->addChildren($node, $current->right);
                    $added = $node;
                    break;
                } else {
                    $current = $current->left;
                    return $this->insertNode($node, $current);
                }
            } elseif ($node->data > $current->data) {
                if ($current->right === null) {
                    $current->addChildren($current->left, $node);
                    $added = $node;
                    break;
                } else {
                    $current = $current->right;
                    return $this->insertNode($node, $current);
                }
            } else {
                break;
            }
        }
        return $added;
    }
    /**
     * Method to retrieve a node from the binary tree
     */
    public function retrieve($node)
    {
        if ($this->isEmpty()) {
            return false;
        }
        $current = $this->root;
        if ($node->data === $this->root->data) {
            return true;
        } else {
            return $this->retrieveNode($node, $current);
        }
    }
    /**
     * Method to recursively add nodes to a binary tree
     */
    private function retrieveNode($node, $current)
    {
        $exists = false;
        while ($exists === false) {
            if ($node->data < $current->data) {
                if ($current->left === null) {
                    break;
                } elseif ($node->data == $current->left->data) {
                    $exists = $current->left;
                    break;
                } else {
                    $current = $current->left;
                    return $this->retrieveNode($node, $current);
                }
            } elseif ($node->data > $current->data) {
                if ($current->right === null) {
                    break;
                } elseif ($node->data == $current->right->data) {
                    $exists = $current->right;
                    break;
                } else {
                    $current = $current->right;
                    return $this->retrieveNode($node, $current);
                }
            }
        }
        return $exists;
    }

    /**
     * Method to remove an element from the binary tree
     */
    public function removeElement($elem)
    {
        if ($this->isEmpty()) {
            return false;
        }
        $node = $this->retrieve($elem);
        if (!$node) {
            return false;
        }
        if ($elem->data === $this->root->data) {
            // find the largest value in the left sub tree
            $current = $this->root->left;
            while ($current->right != null) {
                $current = $current->right;
                continue;
            }
        } // added this to remove error
        // set this node to be the root
        $current->left = $this->root->left;
        $current->right = $this->root->right;
        //Find the parent for the node and set it as the parent for any //children the node may have had
        $parent = $this->findParent($current, $this->root);
        $parent->right = $current->left;
        //finally set that node as the new root for the binary tree
        $this->root = $current;
        return true;
    }
    private function findParent($child, $current)
    {
        $parent = false;
        while ($parent === false) {
            if ($child->data < $current->data) {
                if ($child->data === $current->left->data) {
                    $parent = $current;
                    break;
                } else {
                    return $this->findParent($child, $current->left);
                    break;
                }
            } elseif ($child->data > $current->data) {
                if ($child->data === $current->right->data) {
                    $parent = $current;
                    break;
                } else {
                    return $this->findParent($child, $current->right);
                    break;
                }
            } else {
                break;
            }
        }
        return $parent;
    }
}
