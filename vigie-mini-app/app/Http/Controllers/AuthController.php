<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Handle authentication request
     *
     * @param Request   $request  Our request
     */ 
    public function Authenticate(Request $request)
    {
        // Validate our fields first
        $validator = FacadesValidator::make($request->all(), [
            'username' => 'required|min:4|max:24',
            'password' => 'required|min:4|max:24',
        ]);

        // Flash an error if the validation fails and return to login
        if($validator->fails())
        {
            FacadesSession::flash('error', $validator->errors()->first());
            return redirect()->back()->withInput();
        }

        // Attemp to login with this username and password using the user model, redirect to dashboard if successful
        // We'll use laravels session controller since we would need to create a special service in order to use auth facade
        // without an actual database. We can later check if we have a session id or username in order to determine if we're logged in or not
        $user = new User();
        if($user->attempt($request->only('username', 'password')))
        {
            return redirect()->route('Dashboard');
        }
        else
        {
            FacadesSession::flash('error', "This username and password don't match, please try again.");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Handle logout request
     */ 
    public function Logout()
    {
        // Http session, not facades since we are not using auth
        session()->flush();
        session()->invalidate();

        return redirect()->route('Login');
    }
}
