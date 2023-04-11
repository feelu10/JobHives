<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function toHome()
    {
        return view('main.index');
    }

    public function toAbout()
    {
        return view('main.about');
    }

    public function toContact()
    {
        return view('main.contact');
    }

}
?>