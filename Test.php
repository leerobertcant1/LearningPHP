<?php
include 'Test2.php';
include 'Test3.php';
include 'Test4.php';

echo "Test";

//echo phpinfo();

$testClassOne = new TestClass(); //Can't do inline objects.
$testClassTwo = new TestClass2();
$testClassThree = new TestClass3();
$testClassFour = new TestClass4();

$test = $testClassOne->getTest(); //Function access
$test2 = $testClassTwo->Test2; //Property access
$test3 = $testClassThree->test3;//Property access on Constructor
$test4 = $testClassFour->GetTestFour();

echo $test4;


class TestClass{
    public $_testVar = "Test";

    public function getTest() {
        $testVar2 = $this->_testVar;

        return $testVar2;
    }

    public function getTestVar2() {
        $test2 = new TestClass2();

        return $test2->test2;
    }
}
