<?php
include_once('./model/DbClass.class.php');

use PHPUnit\Framework\TestCase;

class DbClassTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->transaction = new DbClass();
    }
    public function tearDown()
    {
        parent::tearDown();
    }
    /**
     * @test
     * $covers model/DbClass::login
     */
    public function testLogin()
    {
        $emailId = 'testbin12@gmail.com';
        $password = '111111';
        $result = $this->transaction->login($emailId, $password);
        $this->assertTrue($result);
    }
}

?>
