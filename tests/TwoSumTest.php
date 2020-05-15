<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\TwoSum;

class TwoSumTest extends TestCase
{
    public function testTwoSum()
    {
        $s = new TwoSum();
        $result = $s->twoSum([2, 7, 11, 15], 9);
        $this->assertSame([0, 1], $result);
    }
}
