<?php

namespace Tests\Unit;

use App\Models\FakeUser;
use Tests\TestCase;

class FakeUserTest extends TestCase
{
    public function testFakeUsers()
    {
        $this->assertTrue(FakeUser::getAll() != null);
    }
}
