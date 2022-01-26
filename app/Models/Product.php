<?php
namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Storage;

class Product
{
    public static function getAll()
    {
        $contents = Storage::disk()->get('products.json');
        $decoded = json_decode($contents);
        return $decoded;
    }
}