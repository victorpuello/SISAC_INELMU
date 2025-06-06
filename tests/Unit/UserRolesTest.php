<?php
namespace Tests\Unit;

use ATS\Model\User;
use Mockery;
use Tests\TestCase;

class UserRolesTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_is_admin_returns_true_for_admin_role()
    {
        $user = new User();

        $mock = Mockery::mock('alias:Bouncer');
        $mock->shouldReceive('is')->with($user)->andReturn(new class {
            public function an($role) { return $role === 'admin'; }
        });

        $this->assertTrue($user->isAdmin());
    }

    public function test_is_docente_returns_false_when_not_assigned()
    {
        $user = new User();

        $mock = Mockery::mock('alias:Bouncer');
        $mock->shouldReceive('is')->with($user)->andReturn(new class {
            public function an($role) { return false; }
        });

        $this->assertFalse($user->isDocente());
    }
}
