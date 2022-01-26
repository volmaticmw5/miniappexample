<?php
namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Storage;

class Companies
{
    public static function getAll()
    {
        $contents = Storage::disk()->get('companies.json');
        $decoded = json_decode($contents);
        return $decoded;
    }
}