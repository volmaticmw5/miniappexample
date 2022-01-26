<?php

namespace Tests\Unit;

use App\Models\Companies;
use Tests\TestCase;

class CompaniesTest extends TestCase
{
    public function testCompanies()
    {
        $this->assertTrue(Companies::getAll() != null);
    }
}
