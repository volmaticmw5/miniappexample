<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class Authentication extends TestCase
{
    public function testAuthentication()
    {
        $user = new User();
        $this->assertTrue($user->attempt(['username', 'password']));
    }
}
