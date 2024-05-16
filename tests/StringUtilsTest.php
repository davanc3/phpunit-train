<?php

namespace Php\Package\Tests;

use Php\Package\Utils\StringUtils;
use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', StringUtils::reverseString(''));
        $this->assertEquals('olleh', StringUtils::reverseString('hello'));
        $this->assertEquals('тевирп', StringUtils::reverseString('привет'));
    }
}