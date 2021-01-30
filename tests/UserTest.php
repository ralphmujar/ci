<?php namespace Tests;
require 'app/User.php';

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public $oUser;

    public function testName()
    {
        $this->oUser = new User;
        $this->oUser->name = 'Ralph';
        $this->assertEquals('Ralph', $this->oUser->getName());
    }

}
