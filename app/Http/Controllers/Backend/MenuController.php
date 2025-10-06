<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
     public function menu()
    {
        return view('frontend.home.menu',[
            'title' => 'Menu',
        ]);
    }
     public function index()
    {
        return view('backend.menu.index',[
            'title' => 'Menu',
        ]);
    }
}
