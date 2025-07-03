<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase {
    public function testGetName() {
        $user = new User("Moad");
        $this->assertEquals("Moad", $user->getName());
    }

    public function testIsActiveByDefault() {
        $user = new User("Moad");
        $this->assertTrue($user->isActive());
    }

    public function testDeactivateUser() {
        $user = new User("Moad");
        $user->deactivate();
        $this->assertFalse($user->isActive());
    }
}
