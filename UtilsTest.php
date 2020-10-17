<?php

use PHPUnit\Framework\TestCase;
require_once "Utils.php";

class UtilsTest extends TestCase
{
    private $utils;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->utils = new Utils();
    }
 
    protected function tearDown(): void
    {
        $this->utils = NULL;
        parent::tearDown();
    }

    //Test of User Requirement / Specification 
    //Equivalence Partitioning (+/-)
    //Boundary Value Analysis / Limit Testing 
    //Decision Table 
    //Cause Effect Graph 
    //Error Guessing

    //Test of User Requirement / Specification
    //jika lebihd ari 90 maka dapat A
    public function testGetMark_req1()
    {
        $grade = 91;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('A', $mark); 
    }

    //Test of User Requirement / Specification
    // jika lebih dari 80 maka dapat AB
    public function testGetMark_req2()
    {
        $grade = 81;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('AB', $mark); 
    }

    //Test of User Requirement / Specification
    // jika lebih dari 70 maka dapat B
    public function testGetMark_req3()
    {
        $grade = 71;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('B', $mark); 
    }

    //Test of User Requirement / Specification
    // jika lebih dari 60 maka dapat BC
    public function testGetMark_req4()
    {
        $grade = 61;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('BC', $mark); 
    }

    //Test of User Requirement / Specification
    // jika lebih dari 50 maka dapat C
    public function testGetMark_req5()
    {
        $grade = 51;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('C', $mark); 
    }

    //Test of User Requirement / Specification
    // jika lebih dari 40 maka dapat D
    public function testGetMark_req6()
    {
        $grade = 41;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('D', $mark); 
    }

    //Test of User Requirement / Specification
    // jika kurang dari 40 maka dapat E
    public function testGetMark_req7()
    {
        $grade = 39;
        $mark = $this->utils->getMark($grade);
        $this->assertEquals('E', $mark); 
    }

    


}