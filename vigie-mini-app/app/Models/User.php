<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    protected $fillable = [
        'username',
        'sid' // Session id since we're not using an actual database we can't really use the auth facade
    ];

    /**
     * Attempt authentication using User credentials
     */
    public function attempt($credentials)
    {
        if($this->validCredentials($credentials['username'], $credentials['password']))
        {
            $this->fillable[0] = $credentials['username'];
            $this->fillable[1] = session()->regenerate();

            session()->put('username', $this->fillable[0]);
            session()->put('id', $this->fillable[1]);

            return true;
        }

        return false;
    }

     /**
     * Validate a username and password combination
     * based on a json file in storage
     * 
     * @param string   $username  Username
     * @param string   $password  Password
     * @param bool   $strict  Strict match only
     * 
     * @return bool Valid or not
     */ 
    private function validCredentials($username, $password, $strict = true)
    {
        // Read the whole json file where our credentials are stored
        $jsonFile = Storage::disk()->get('users.json');
        $obj = json_decode($jsonFile);

        // Loop through our json entries and find a match, if any
        for($i = 0; $i < count($obj); $i++){
            if($strict)
            {
                if($obj[$i]->username === $username && $obj[$i]->password === $password)
                    return true;
            }
            else
            {
                if(strpos($obj[$i]->username, $username) && strpos($obj[$i]->password, $password))
                    return true;
            }
        }

        return false;
    }
}