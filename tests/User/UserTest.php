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
     * @param $age
     * @param $age2
     * @dataProvider userProvider
     */
    public function testAge($age, $age2)
    {
        /// 33 == $this->user->getAge()
        $this->assertEquals($age, $age2);

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