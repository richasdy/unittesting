<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
        parent::tearDown();
    }

    public function testWithStub()
    {
        $calculator = $this->getMockBuilder('Calculator')
                       ->getMock();
 
        $calculator->expects($this->any())
               ->method('add')
               ->will($this->returnValue(6));
 
        $this->assertEquals(6, $calculator->add(100,100));
    }
 
}