<?php

namespace Src;

class MergeTrees
{
    /**
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     *
     * @source https://leetcode.com/problems/merge-two-binary-trees/
     *
     * Definition for a binary tree node.
     *
     * class TreeNode
     * {
     *     public $val = null;
     *     public $left = null;
     *     public $right = null;
     *     public function __construct($val = 0, $left = null, $right = null)
     *     {
     *         $this->val = $val;
     *         $this->left = $left;
     *         $this->right = $right;
     *     }
     * }
     */
    public function mergeTrees($t1, $t2)
    {
        /**
         * 解答
         */
        if ($t1 == null) {
            return $t2;
        }
        if ($t2 == null) {
            return $t1;
        }
        $t1->val += $t2->val;
        $t1->left = $this->mergeTrees($t1->left, $t2->left);
        $t1->right = $this->mergeTrees($t1->right, $t2->right);
        return $t1;
    }
}
