<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\KidWithCandies;

class KidWithCandiesTest extends TestCase
{
    public function testKidWithCandies()
    {
        $s = new KidWithCandies();
        $result = $s->kidWithCandies([2,3,5,1,3], 3);
        $this->assertSame([true,true,true,false,true], $result);
        $result = $s->kidWithCandies([4,2,1,1,2], 1);
        $this->assertSame([true,false,false,false,false], $result);
    }
}
