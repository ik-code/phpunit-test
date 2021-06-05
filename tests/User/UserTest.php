<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new \App\Models\User();
        $this->user->setAge(33);
    }

    protected function tearDown(): void
    {

    }

    /**
     *
     */
    public function testAge1()
    {
        /// 33 == $this->user->getAge()
        $this->assertEquals(33, $this->user->getAge());
        return 33;

    }

    /**
     * @param $age
     * @depends testAge1
     */
    public function testAge2($age)
    {
        /// 33 == $this->user->getAge()
        $this->assertEquals($age, $this->user->getAge());

        /// 33 === $this->user->getAge() ///  $this->assertSame('33', $this->user->getAge()); /// will be error
        //$this->assertSame($age, $this->user->getAge());
    }

    public function userProvider()
    {
        return [
          "one" => [1, 2],
          "two" => [2, 2],
          "correct" => [33, 2],
        ];
    }


}