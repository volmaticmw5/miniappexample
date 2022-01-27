<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\FakeUser;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Our entry to the app
     * If the user is not authenticated, return the login view
     * Else, we'll redirect to our Dashboard route
     *
     * @param Request   $request  Our request
     */ 
    public function Index()
    {
        if(session()->get('username') !== null && session()->get('id') !== null)
            return redirect()->route('Dashboard');

        return view('login');
    }

    public function DashboardPage()
    {
        $page = new Page();

        return view('dashboard', [
            'formData' => $page->getFormData('dashboard'),
            'colorBtnName' => $page->get('colorBtnName'),
            'colorDynDefaultName' => $page->get('dynBtnName'),
            'table_data' => Companies::getAll()
        ]);
    }

    public function ProductsPage()
    {
        $page = new Page();

        return view('products', [
            'formData' => $page->getFormData('product'),
            'colorBtnNameBig' => $page->get('colorBtnNameBig'),
            'table_data' => Product::getAll()
        ]);
    }
    public function SettingsPage()
    {
        $page = new Page();
        
        return view('settings', [
            'formData' => $page->getFormData('settings'),
            'table_data' => FakeUser::getAll()
        ]);
    }
}
