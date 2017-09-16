<?php
use PHPUnit\Framework\TestCase;
use VirtualStyle\PhpLibraryBoileplate\PhpLibraryBoileplate;

class PhpLibraryBoileplateTest extends TestCase
{
    public function testPhpLibraryBoileplate()
    {
        $PhpLibraryBoileplate = new PhpLibraryBoileplate();
        $test = $PhpLibraryBoileplate->sayHello('Asshole');
        $this->assertEquals('Hello Asshole' . PHP_EOL, $test);
    }
}
