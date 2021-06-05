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
     * @dataProvider userProvider
     */
    public function testAge($age)
    {
        /// 33 == $this->user->getAge()
        $this->assertEquals($age, $this->user->getAge());

        /// 33 === $this->user->getAge() ///  $this->assertSame('33', $this->user->getAge()); /// will be error
        //$this->assertSame($age, $this->user->getAge());
    }

    public function userProvider()
    {
        return [
            [1],
            [1],
            [33],
        ];
    }


}