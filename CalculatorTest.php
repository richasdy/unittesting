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
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testAddWithZero()
        {
            $result = $this->calculator->add(0, 0);
            $this->assertEquals(0, $result);
        }
 
    public function testAddWithNegative()
        {
            $result = $this->calculator->add(-1, -1);
            $this->assertEquals(-2, $result);
        }
 
}