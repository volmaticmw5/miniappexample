<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Share the pagename accross views so we can build the title
        View::share('PageName', $this->prettyPageName());
    } 

    private function prettyPageName()
    {
        if(\Request::route()->getName() != "")
            return \Request::route()->getName();
        else
            return 'Welcome';
    }
}
