<?php
include 'Test2.php';

echo "Test";

$testClassOne = new TestClass(); //Can't do inline objects.
$testClassTwo = new TestClass2();

$test = $testClassOne->getTest(); //Function access
$test2 = $testClassTwo->Test2; //Property access


class TestClass{
    public $_testVar = "Test";

    public function getTest(): string {
        $testVar2 = $this->_testVar;

        return $testVar2;
    }

    public function getTestVar2(): string {
        $test2 = new TestClass2();

        return $test2->test2;
    }
}