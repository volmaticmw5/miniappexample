<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

// I used a get because it doesn't make a lot of sense being a post, idk if it was bad wording on the pdf but... 
Route::get('GetNewTextForDynBtn', [APIController::class, 'GetNewTextForDynBtn']);
