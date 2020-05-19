<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\DefangIPaddr;

class DefangIPaddrTest extends TestCase
{
    public function testDefangIPaddr()
    {
        $s = new DefangIPaddr();
        $result = $s->defangIPaddr("1.1.1.1");
        $this->assertSame("1[.]1[.]1[.]1", $result);
        $result = $s->defangIPaddr("255.100.50.0");
        $this->assertSame("255[.]100[.]50[.]0", $result);
    }
}
