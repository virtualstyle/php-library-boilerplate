<?php
use PHPUnit\Framework\TestCase;
use VirtualStyle\PhpLibraryBoilerplate\PhpLibraryBoilerplate;

class PhpLibraryBoilerplateTest extends TestCase
{
    public function testPhpLibraryBoilerplate()
    {
        $PhpLibraryBoilerplate = new PhpLibraryBoilerplate();
        $test = $PhpLibraryBoilerplate->sayHello('Asshole');
        $this->assertEquals('Hello Asshole' . PHP_EOL, $test);
    }
}
