<?php

namespace Src;

class TwoSum
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * @source https://leetcode.com/problems/two-sum/
     */
    public function twoSum($nums, $target)
    {
        $result = [];
        for ($i = 0; $i < count($nums); $i ++) {
            $complement = $target - $nums[$i];
            if (isset($result[$complement])) {
                return [$result[$complement], $i];
            }
            $result[$nums[$i]] = $i;
        }
    }
}
