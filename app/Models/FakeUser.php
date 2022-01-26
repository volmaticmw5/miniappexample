<?php
namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Storage;

class FakeUser
{
    public static function getAll()
    {
        $contents = Storage::disk()->get('fake_users.json');
        $decoded = json_decode($contents);
        return $decoded;
    }
}