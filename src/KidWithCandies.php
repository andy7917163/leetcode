<?php

namespace Src;

class KidWithCandies
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * Constraints:
     * 2 <= candies.length <= 100
     * 1 <= candies[i] <= 100
     * 1 <= extraCandies <= 50
     *
     * @source https://leetcode.com/problems/kids-with-the-greatest-number-of-candies/
     */
    public function kidWithCandies($candies, $extraCandies)
    {
        $result = [];

        /**
         * 自解
         *
         * 1.先找出最大值
         * 2.輪循是否有加上extraCandies會大於最大值者
         */

        $max = 0;
        foreach ($candies as $value) {
            if ($value > $max) {
                $max = $value;
            }
        }

        foreach ($candies as $value1) {
            if ($value1 + $extraCandies >= $max) {
                $result[] = true;
            } else {
                $result[] = false;
            }
        }

        return $result;
    }
}
