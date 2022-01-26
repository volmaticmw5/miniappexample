<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testProducts()
    {
        $this->assertTrue(Product::getAll() != null);
    }
}
